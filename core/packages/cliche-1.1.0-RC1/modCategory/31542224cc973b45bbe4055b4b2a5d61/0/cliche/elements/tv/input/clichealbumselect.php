<?php

if(!class_exists('ClicheAlbumSelectInputRender')) {
    class ClicheAlbumSelectInputRender extends modTemplateVarInputRender {
        public function getTemplate() {
            return $this->modx->getOption('core_path').'components/cliche/elements/tv/clichealbumselect.tpl';
        }
        public function process($value,array $params = array()) {
            $this->modx->controller->addLastJavascript($this->modx->getOption('assets_path') . "components/cliche/mgr/clichealbumtv/album.combo.js");
        }
    }
}
return 'ClicheAlbumSelectInputRender';