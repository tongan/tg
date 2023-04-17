<?php
/**
 * Snippet Cliche
 *
 * @package cliche
 */
 /**
 * Cliche
 *
 * A Gallery manager components for MODx Revolution
 *
 * @author Stephane Boulard <lossendae@gmail.com>
 * @package cliche
 */
 $Cliche = $modx->getService('cliche','Cliche',$modx->getOption('cliche.core_path',null,$modx->getOption('core_path').'components/cliche/').'model/cliche/',$scriptProperties);
if (!($Cliche instanceof Cliche)) return 'Cliche could not be loaded';
$view = $modx->getOption('view', $_REQUEST, $modx->getOption('view', $scriptProperties, null));
$scriptProperties['plugin'] = $modx->getOption('plugin', $scriptProperties, 'default');
$controllerName = ($view != null) ?  ucfirst($view) : 'Albums';
$scriptProperties['view'] = strtolower($controllerName);

$controller = $Cliche->loadController($controllerName);
$output = $controller->run($scriptProperties);
return $output;