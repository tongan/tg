<?php
/**
 * Cliche
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Cliche, a media manager for MODx Revolution.
 *
 * Cliche is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Cliche is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Cliche; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package cliche
 */
/**
 * Show the album list
 * 
 * @package cliche
 * @subpackage controllers
 */
class AlbumsController extends ClicheController {
    /**
     * Initialize this controller, setting up default properties
     * @return void
     */
    public function initialize() {
        $this->setDefaultProperties(array(
            'thumbWidth' => 120,
            'thumbHeight' => 120,
                        
            'wrapperTpl' => 'albumswrapper',
            'itemTpl' => 'albumcover',
            
            'idParam' => 'cid',
            'viewParam' => 'view',
            'viewParamName' => 'album',
        ));
        $this->fireEvent('load');
    }
    
    /**
     * Process and load The album list
     * @return string
     */
    public function process() {
        $output = $this->getSets();  
        $this->fireEvent('render');
        return $output;
    }
    
    /**
     * Process and load The album list
     * @return string
     */
    private function getSets(){
        $list = '';
        
        $c = $this->modx->newQuery('ClicheAlbums');
        /* Pass the query for modification to the controller class */
        $modifiedQuery = $this->fireEvent('beforeQuery', array(&$c, 'ClicheAlbums'));
         if($modifiedQuery) $c = $modifiedQuery;
         
        $rows = $this->modx->getCollectionGraph('ClicheAlbums', '{ "Cover":{} }', $c);
        
        if(!$rows) return $this->modx->lexicon('cliche.no_albums');
        
        foreach($rows as $row){
            $data = $row->toArray();
            $list .= $this->getItem($data, $row);
            /* We pass the processed string to the plugin ? */
            $modified = $this->fireEvent('afterItemRendered', array(&$list));    
            if($modified){
                $list = $modified;
            }    
        }
        $phs['items'] = $list;       
        $sets = $this->getChunk($this->getProperty('wrapperTpl'), $phs);
        return $sets;
    }
    
    /**
     * Process and load The album cover
     * @return string
     */
    private function getItem($phs, $obj){        
        /* Handle url + additionnal field where only the req params are sended back for custom url scheme */
        $params = array( 
            $this->getProperty('viewParam') => $this->getProperty('viewParamName'),  
            $this->getProperty('idParam') => $obj->id,
        );            
        $phs['url'] = $this->modx->makeUrl( $this->modx->resource->get('id'),'',$params);    
        $phs['urlparams'] = http_build_query($params);    
        
        $phs['width'] = $this->getProperty('thumbWidth');
        $phs['height'] = $this->getProperty('thumbHeight');
        
        /* The album cover */
        $phs['image'] = $this->config['images_url'] . $obj->Cover->filename;
        $phs['phpthumb'] = $this->config['phpthumb'] . $phs['image'];
        $phs['albumname'] = $obj->name;
        
        $returned = $this->fireEvent('setItemPlaceholder', array($phs, & $obj->Cover));
        if(is_array($returned)){
            $phs = $returned;
        }

        /* Not used yet */
        unset($phs['options']);
        
        $cover = $obj->Cover->toArray();
        // foreach($cover['metas'] as $k => $v){
            // $name = strtolower(str_replace(' ','',$v['name']));
            // $cover['cover.'. $name] = $v['value'];
        // }
        // unset($cover['id']);
        // unset($cover['metas']);
        $phs = array_merge($phs, $cover);    

        $processed = $this->getChunk($this->getProperty('itemTpl'), $phs);            
        return $processed;
    }
}
return 'AlbumsController';