<?php
/**
 * @package cliche
 */

/* load phpThumb */
if (!$modx->loadClass('modPhpThumb',$modx->getOption('core_path').'model/phpthumb/',true,true)) {
    $modx->log(modX::LOG_LEVEL_ERROR,'[phpThumbOf] Could not load modPhpThumb class.');
    return '';
}
$src = $modx->getOption('src',$scriptProperties,'');
$src = str_replace('+','%27',urldecode($src));


/* explode tag options */
$ptOptions = $scriptProperties;

if (empty($ptOptions['f'])){
    $ext = pathinfo($src, PATHINFO_EXTENSION);
    $ext = strtolower($ext);
    switch ($ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
        case 'bmp':
            $ptOptions['f'] = $ext;
            break;
        default:
            $ptOptions['f'] = 'jpeg';
            break;
    }
}

/* load phpthumb */
$assetsPath = $modx->getOption('cliche.assets_path',$scriptProperties,$modx->getOption('assets_path').'components/cliche/');
$phpThumb = new modPhpThumb($modx,$ptOptions);
$cacheDir = $assetsPath.'cache/';

/* check to make sure cache dir is writable */
if (!is_writable($cacheDir)) {
    if (!$modx->cacheManager->writeTree($cacheDir)) {
        $modx->log(modX::LOG_LEVEL_ERROR,'[phpThumbOf] Cache dir not writable: '.$assetsPath.'cache/');
        return '';
    }
}

/* do initial setup */
$phpThumb->initialize();
$phpThumb->setParameter('config_cache_directory',$assetsPath.'cache/');
$phpThumb->setParameter('config_allow_src_above_phpthumb',true);
$phpThumb->setParameter('allow_local_http_src',true);
$phpThumb->setParameter('config_document_root','');
$phpThumb->setCacheDirectory();

/* get absolute url of image */
if (strpos($src,'/') != 0 && strpos($src,'http') != 0) {
    $src = $modx->getOption('base_url').$src;
} else {
    $src = urldecode($src);
}
/* auto-prepend base path if not a URL */
if (strpos($src,'http') === false) {
    $basePath = $modx->getOption('base_path',null,MODX_BASE_PATH);
    if ($basePath != '/') {
        $src = str_replace(basename($basePath),'',$src);
        $src = ltrim($src,'/');
        $src = $basePath.$src;
    }
}
/* set source */
$phpThumb->set($src);

/* setup cache filename that is unique to this tag */
$inputSanitized = str_replace(array(':','/'),'_',$src);
$cacheFilename = $inputSanitized;
$cacheFilename .= '.'.md5(serialize($scriptProperties));
$cacheFilename .= '.' . (!empty($ptOptions['f']) ? $ptOptions['f'] : 'png');
$cacheKey = $assetsPath.'cache/'.$cacheFilename;

/* get cache Url */
$assetsUrl = $modx->getOption('cliche.assets_url',$scriptProperties,$modx->getOption('assets_url').'components/cliche/');
$cacheUrl = $assetsUrl.'cache/'.str_replace($cacheDir,'',$cacheKey);
$cacheUrl = str_replace('//','/',$cacheUrl);

/* ensure we have an accurate and clean cache directory */
$phpThumb->CleanUpCacheDirectory();

/* debugging code */
if ($debug) {
    $mtime = microtime();
    $mtime = explode(" ", $mtime);
    $mtime = $mtime[1] + $mtime[0];
    $tstart = $mtime;
    set_time_limit(0);

    $oldLogTarget = $modx->getLogTarget();
    $oldLogLevel = $modx->getLogLevel();
    $modx->setLogLevel(modX::LOG_LEVEL_DEBUG);
    $logTarget = $modx->getOption('debugTarget',$scriptProperties,'');
    if (!empty($logTarget)) {
        $modx->setLogTarget();
    }
}

/* ensure file has proper permissions */
if (!empty($cacheKey)) {
    $filePerm = (int)$modx->getOption('new_file_permissions',$scriptProperties,'0664');
    @chmod($cacheKey, octdec($filePerm));
}
if ($debug) {
    $mtime= microtime();
    $mtime= explode(" ", $mtime);
    $mtime= $mtime[1] + $mtime[0];
    $tend= $mtime;
    $totalTime= ($tend - $tstart);
    $totalTime= sprintf("%2.4f s", $totalTime);

    $modx->log(modX::LOG_LEVEL_DEBUG,"\n<br />Execution time: {$totalTime}\n<br />");
    $modx->setLogLevel($oldLogLevel);
    $modx->setLogTarget($oldLogTarget);
}
$output = '';
$modx->setLogTarget('ECHO');
/* check to see if there's a cached file of this already */
if (file_exists($cacheKey)) {
    $modx->log(modX::LOG_LEVEL_DEBUG,'[phpThumbOf] Using cached file found for thumb: '.$cacheKey);
    $output = str_replace(' ','%20',$cacheUrl);
} else {
    /* actually make the thumbnail */
    if ($phpThumb->GenerateThumbnail()) { // this line is VERY important, do not remove it!
        if ($phpThumb->RenderToFile($cacheKey)) {
            $output = str_replace(' ','%20',$cacheUrl);
        } else {
            $modx->log(modX::LOG_LEVEL_ERROR,'[phpThumbOf] Could not cache thumb "'.$src.'" to file at: '.$cacheKey.' - Debug: '.print_r($phpThumb->debugmessages,true));
        }
    } else {
        $modx->log(modX::LOG_LEVEL_ERROR,'[phpThumbOf] Could not generate thumbnail: '.$src.' - Debug: '.print_r($phpThumb->debugmessages,true));
    }
}

if (!headers_sent()) {
    header('Content-Type: '.phpthumb_functions::ImageTypeToMIMEtype($phpThumb->thumbnailFormat));
}
return file_get_contents($cacheKey);