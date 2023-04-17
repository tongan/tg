<?php
/**
 * @package cliche
 * @subpackage plugin
 */
class Galleriffic extends ClichePlugin {
    public function load(){        
        $this->setProperty('wrapperTpl','wrapper');
        $this->setProperty('itemTpl','item');
    }
    
    public function setItemPlaceholder($phs, $obj){
        /* We use the internal phpThumb class to set the custom thumbnail */
        $fileName = str_replace(' ', '_', $obj->get('name'));
        $mask = $fileName .'-'. $phs['width'] .'x'. $phs['height'] .'-zc.png';
        $file = $obj->getCacheDir() . $mask;
        if(!file_exists($file)){
            $original = $this->controller->config['images_path'] . $obj->get('filename');
            $thumb = $obj->loadThumbClass( $original, array(
                'resizeUp' => true,
                'jpegQuality' => 90,
             ));
            $thumb->adaptiveResize($phs['width'], $phs['height']);
            $thumb->save($file, 'png');
        }
        $phs['thumbnail'] = $obj->getCacheDir(false) . $mask;        
        return $phs;
    }
    
    public function render(){
        $loadCss = $this->getProperty('loadCss', true);
        if($loadCss){
             $css = $this->getProperty('css', 'style');
             $this->controller->loadCSS($css);
        }
        $loadJquery = $this->getProperty('loadJquery', true);
        if($loadJquery){
            $this->modx->regClientStartupScript('http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
        }        
        $this->modx->regClientStartupScript($this->controller->config['plugin_assets_url'] . 'libs/jquery.galleriffic.js');
        $this->modx->regClientStartupScript($this->controller->config['plugin_assets_url'] . 'libs/jquery.history.js');
        $this->modx->regClientStartupScript($this->controller->config['plugin_assets_url'] . 'libs/jquery.opacityrollover.js');
                
        $script = $this->getProperty('js', 'script');
        $this->modx->regClientHTMLBlock('<script type="text/javascript">'. $this->controller->getChunk($script) .'</script>');
    }
}