/**
 *
 * @class MODx.panel.Plugin
 * @extends MODx.FormPanel
 * @param {Object} config An object of config properties
 * @xtype panel-plugin
 */
MODx.panel.Plugin = function(config) {
    config = config || {};
    config.record = config.record || {};
    config = MODx.setStaticElementsConfig(config, 'plugin');

    Ext.applyIf(config,{
        url: MODx.config.connector_url
        ,baseParams: {
            action: 'Element/Plugin/Get'
        }
        ,id: 'modx-panel-plugin'
		,cls: 'container form-with-labels'
        ,class_key: 'MODX\\Revolution\\modPlugin'
        ,plugin: ''
        ,bodyStyle: ''
        ,allowDrop: false
        ,previousFileSource: config.record.source != null ? config.record.source : MODx.config.default_media_source
        ,items: [{
            html: _('plugin_new')
            ,id: 'modx-plugin-header'
            ,xtype: 'modx-header'
        },MODx.getPageStructure([{
            title: _('plugin_title')
            ,layout: 'form'
            ,id: 'modx-plugin-form'
            ,labelWidth: 150
            ,defaults: { border: false ,msgTarget: 'side' }
            ,items: [{
                html: '<p>'+_('plugin_msg')+'</p>'
                ,id: 'modx-plugin-msg'
                ,xtype: 'modx-description'
            },{
                layout: 'column'
                ,border: false
                ,defaults: {
                    layout: 'form'
                    ,labelAlign: 'top'
                    ,anchor: '100%'
                    ,border: false
                    ,cls:'main-wrapper'
                    ,labelSeparator: ''
                }
                ,items: [{
                    columnWidth: .6
                    ,items: [{
                        xtype: 'hidden'
                        ,name: 'id'
                        ,id: 'modx-plugin-id'
                        ,value: config.record.id || 0
                    },{
                        xtype: 'hidden'
                        ,name: 'props'
                        ,id: 'modx-plugin-props'
                        ,value: config.record.props || null
                    },{
                        xtype: 'textfield'
                        ,fieldLabel: _('name')
                        ,description: MODx.expandHelp ? '' : _('plugin_desc_name')
                        ,name: 'name'
                        ,id: 'modx-plugin-name'
                        ,anchor: '100%'
                        ,maxLength: 50
                        ,enableKeyEvents: true
                        ,allowBlank: false
                        ,value: config.record.name
                        ,listeners: {
                            'keyup': {scope:this,fn:function(f,e) {
                                var title = Ext.util.Format.stripTags(f.getValue());
                                title = _('plugin')+': '+Ext.util.Format.htmlEncode(title);
                                if (MODx.request.a !== 'element/plugin/create' && MODx.perm.tree_show_element_ids === true) {
                                    title = title+ ' <small>('+this.config.record.id+')</small>';
                                }

                                Ext.getCmp('modx-plugin-header').getEl().update(title);

                                MODx.setStaticElementPath('plugin');
                            }}
                        }
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-name'
                        ,html: _('plugin_desc_name')
                        ,cls: 'desc-under'
                    },{
                        xtype: 'textarea'
                        ,fieldLabel: _('plugin_desc')
                        ,description: MODx.expandHelp ? '' : _('plugin_desc_description')
                        ,name: 'description'
                        ,id: 'modx-plugin-description'
                        ,anchor: '100%'
                        ,maxLength: 255
                        ,value: config.record.description
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-description'
                        ,html: _('plugin_desc_description')
                        ,cls: 'desc-under'
                    },this.getStaticFileField('plugin', config.record),{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-static-file'
                        ,id: 'modx-plugin-static-file-help'
                        ,html: _('static_file_msg')
                        ,cls: 'desc-under'
                        ,hidden: !config.record['static']
                        ,hideMode: 'offsets'
                    },{
                        html: MODx.onPluginFormRender
                        ,border: false

                    }]
                },{
                    columnWidth: .4
                    ,items: [{
                        xtype: 'modx-combo-category'
                        ,fieldLabel: _('category')
                        ,description: MODx.expandHelp ? '' : _('plugin_desc_category')
                        ,name: 'category'
                        ,id: 'modx-plugin-category'
                        ,anchor: '100%'
                        ,value: config.record.category || 0
                        ,listeners: {
                            'afterrender': {scope:this,fn:function(f,e) {
                                MODx.setStaticElementPath('plugin');
                            }}
                            ,'select': {scope:this,fn:function(f,e) {
                                MODx.setStaticElementPath('plugin');
                            }}
                        }
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-category'
                        ,html: _('plugin_desc_category')
                        ,cls: 'desc-under'
                    },{
                        xtype: 'xcheckbox'
                        ,description: MODx.expandHelp ? '' : _('plugin_disabled_msg')
                        ,hideLabel: true
                        ,boxLabel: _('plugin_disabled')
                        ,name: 'disabled'
                        ,id: 'modx-plugin-disabled'
                        ,inputValue: 1
                        ,checked: config.record.disabled || 0
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-disabled'
                        ,html: _('plugin_disabled_msg')
                        ,cls: 'desc-under'
                    },{
                        xtype: 'xcheckbox'
                        ,boxLabel: _('plugin_lock')
                        ,description: MODx.expandHelp ? '' : _('plugin_lock_msg')
                        ,hideLabel: true
                        ,name: 'locked'
                        ,id: 'modx-plugin-locked'
                        ,inputValue: 1
                        ,checked: config.record.locked || 0
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-locked'
                        ,html: _('plugin_lock_msg')
                        ,cls: 'desc-under'
                    },{
                        xtype: 'xcheckbox'
                        ,boxLabel: _('clear_cache_on_save')
                        ,description: MODx.expandHelp ? '' : _('clear_cache_on_save_msg')
                        ,hideLabel: true
                        ,name: 'clearCache'
                        ,id: 'modx-plugin-clear-cache'
                        ,inputValue: 1
                        ,checked: Ext.isDefined(config.record.clearCache) || true
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-clear-cache'
                        ,html: _('clear_cache_on_save_msg')
                        ,cls: 'desc-under'
                    },{
                        xtype: 'xcheckbox'
                        ,hideLabel: true
                        ,boxLabel: _('is_static')
                        ,description: MODx.expandHelp ? '' : _('is_static_msg')
                        ,name: 'static'
                        ,id: 'modx-plugin-static'
                        ,inputValue: 1
                        ,checked: config.record['static'] || false
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-static'
                        ,id: 'modx-plugin-static-help'
                        ,html: _('is_static_msg')
                        ,cls: 'desc-under'
                    },{
                        xtype: 'modx-combo-source'
                        ,fieldLabel: _('static_source')
                        ,description: MODx.expandHelp ? '' : _('static_source_msg')
                        ,name: 'source'
                        ,id: 'modx-plugin-static-source'
                        ,anchor: '100%'
                        ,maxLength: 255
                        ,value: config.record.source != null ? config.record.source : MODx.config.default_media_source
                        ,hidden: !config.record['static']
                        ,hideMode: 'offsets'
                        ,baseParams: {
                            action: 'Source/GetList'
                            ,showNone: true
                            ,streamsOnly: true
                        }
                        ,listeners: {
                            select: {
                                fn: function(cmp, record, selectedIndex) {
                                    this.onChangeStaticSource(cmp, 'plugin');
                                },
                                scope: this
                            }
                        }
                    },{
                        xtype: MODx.expandHelp ? 'label' : 'hidden'
                        ,forId: 'modx-plugin-static-source'
                        ,id: 'modx-plugin-static-source-help'
                        ,html: _('static_source_msg')
                        ,cls: 'desc-under'
                        ,hidden: !config.record['static']
                        ,hideMode: 'offsets'
                    }]

                }]
            },{
				xtype: 'panel'
				,border: false
				,layout: 'form'
				,cls:'main-wrapper'
				,labelAlign: 'top'
				,items: [{
					xtype: 'textarea'
					,fieldLabel: _('plugin_code')
					,name: 'plugincode'
					,id: 'modx-plugin-plugincode'
					,anchor: '100%'
					,height: 400
					,value: config.record.plugincode || "<?php\n"
                }]
            }]
        },{
            title: _('system_events')
            ,id: 'modx-plugin-sysevents'
            ,items: [{
                html: '<p>'+_('plugin_event_msg')+'</p>'
                ,id: 'modx-plugin-sysevents-msg'
                ,xtype: 'modx-description'
            },{
                xtype: 'modx-grid-plugin-event'
				,cls:'main-wrapper'
                ,preventRender: true
                ,plugin: config.record.id || 0
                ,listeners: {
                    'updateEvent': {fn:this.markDirty,scope:this}
                    ,'rowclick': {fn:this.markDirty,scope:this}
                }
            }]
        },{
            xtype: 'modx-panel-element-properties'
            ,elementPanel: 'modx-panel-plugin'
            ,elementId: config.plugin
            ,elementType: 'MODX\\Revolution\\modPlugin'
            ,record: config.record
        }],{
            id: 'modx-plugin-tabs'
        })]
        ,useLoadingMask: true
        ,listeners: {
            'setup': {fn:this.setup,scope:this}
            ,'success': {fn:this.success,scope:this}
            ,'beforeSubmit': {fn:this.beforeSubmit,scope:this}
            ,'failureSubmit': {
                fn: function () {
                    this.showErroredTab(['modx-plugin-form'], 'modx-plugin-tabs')
                },
                scope: this
            }
        }
    });
    MODx.panel.Plugin.superclass.constructor.call(this,config);
    var isStatic = Ext.getCmp('modx-plugin-static');
    if (isStatic) { isStatic.on('check',this.toggleStaticFile); }
};
Ext.extend(MODx.panel.Plugin,MODx.FormPanel,{
    initialized: false
    ,setup: function() {
        if (this.initialized) { this.clearDirty(); return true; }
        this.getForm().setValues(this.config.record);
        if (!Ext.isEmpty(this.config.record.name)) {
            var title = _('plugin')+': '+this.config.record.name;
            if (MODx.perm.tree_show_element_ids) {
                title = title+ ' <small>('+this.config.record.id+')</small>';
            }
            Ext.getCmp('modx-plugin-header').getEl().update(title);
        }
        if (!Ext.isEmpty(this.config.record.properties)) {
            var d = this.config.record.properties;
            var g = Ext.getCmp('modx-grid-element-properties');
            if (g) {
                g.defaultProperties = d;
                g.getStore().loadData(d);
            }
        }
        this.fireEvent('ready',this.config.record);
        if (MODx.onLoadEditor) { MODx.onLoadEditor(this); }
        this.clearDirty();
        MODx.fireEvent('ready');
        this.initialized = true;
    }

    ,beforeSubmit: function(o) {
        var g = Ext.getCmp('modx-grid-plugin-event');
        Ext.apply(o.form.baseParams,{
            events: g.encodeModified()
            ,propdata: Ext.getCmp('modx-grid-element-properties').encode()
        });
        this.cleanupEditor();
        return this.fireEvent('save',{
            values: this.getForm().getValues()
            ,stay: MODx.config.stay
        });
    }
    ,success: function(o) {
        if (MODx.request.id) Ext.getCmp('modx-grid-element-properties').save();
        Ext.getCmp('modx-grid-plugin-event').getStore().commitChanges();
        this.getForm().setValues(o.result.object);

        var t = Ext.getCmp('modx-tree-element');
        if (t) {
            var c = Ext.getCmp('modx-plugin-category').getValue();
            var u = c != '' && c != null && c != 0 ? 'n_plugin_category_'+c : 'n_type_plugin';
            var node = t.getNodeById('n_plugin_element_' + Ext.getCmp('modx-plugin-id').getValue() + '_' + o.result.object.previous_category);
            if (node) node.destroy();
            t.refreshNode(u,true);
        }
    }
    ,changeEditor: function() {
        this.cleanupEditor();
        this.on('success',function(o) {
            var id = o.result.object.id;
            var w = Ext.getCmp('modx-plugin-which-editor').getValue();
            MODx.request.a = 'element/plugin/update';
            location.href = '?'+Ext.urlEncode(MODx.request)+'&which_editor='+w+'&id='+id;
        });
        this.submit();
    }
    ,cleanupEditor: function() {
        if (MODx.onSaveEditor) {
            var fld = Ext.getCmp('modx-plugin-plugincode');
            MODx.onSaveEditor(fld);
        }
    }
    ,toggleStaticFile: function(cb) {
        var flds = ['modx-plugin-static-file','modx-plugin-static-source'];
        var fld;
        var i;
        var fldHelp;
        if (cb.checked) {
            for (i in flds) {
                fld = Ext.getCmp(flds[i]);
                if (fld) {
                    fld.show();
                    fld.updateBox(fld.getResizeEl().parent().getBox());

                    fldHelp = Ext.getCmp(flds[i] + '-help');
                    if (fldHelp) {
                        fldHelp.show();
                    }

                }
            }
        } else {
            for (i in flds) {
                fld = Ext.getCmp(flds[i]);
                if (fld) {
                    fld.hide();

                    fldHelp = Ext.getCmp(flds[i] + '-help');
                    if (fldHelp) {
                        fldHelp.hide();
                    }
                }
            }
        }
    }
});
Ext.reg('modx-panel-plugin',MODx.panel.Plugin);
