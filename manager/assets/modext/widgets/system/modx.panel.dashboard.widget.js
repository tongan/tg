/**
 * @class MODx.grid.DashboardWidget
 * @extends MODx.grid.Grid
 * @param {Object} config An object of configuration properties
 * @xtype modx-dashboard-widget-form
 */
 MODx.panel.DashboardWidget = function(config) {
    config = config || {};

    var itms = [];
    itms.push({
        title: _('general_information')
        ,cls: 'main-wrapper'
        ,border: false
        ,defaults: { border: false ,msgTarget: 'side' }
        ,layout: 'form'
        ,id: 'modx-dashboard-widget-form'
        ,labelAlign: 'top'
        ,items: [{
            layout: 'column'
            ,defaults: {
                layout: 'form'
                ,labelAlign: 'top'
                ,anchor: '100%'
                ,border: false
                ,labelSeparator: ''
            }
            ,items: [{
                columnWidth: .6
                ,items: [{
                    xtype: 'hidden'
                    ,name: 'id'
                    ,fieldLabel: _('id')
                    ,id: 'modx-dashboard-widget-id'
                    ,value: config.record.id
                },{
                    name: 'name'
                    ,id: 'modx-dashboard-widget-name'
                    ,xtype: 'textfield'
                    ,fieldLabel: _('name')
                    ,description: _('widget_name_desc')
                    ,allowBlank: false
                    ,enableKeyEvents: true
                    ,anchor: '100%'
                    ,listeners: {
                        'keyup': {scope:this,fn:function(f,e) {
                            var s = _(f.getValue());
                            if (s == undefined) { s = f.getValue(); }
                            Ext.getCmp('modx-header-breadcrumbs').updateHeader(Ext.util.Format.htmlEncode(s));
                        }}
                    }
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-widget-name'
                    ,html: _('widget_name_desc')
                    ,cls: 'desc-under'
                },{
                    xtype: 'displayfield'
                    ,hideLabel: true
                    ,name: 'name_trans'
                    ,cls: 'desc-under desc-trans'
                    ,id: 'modx-dashboard-widget-name-trans'
                },{
                    name: 'description'
                    ,id: 'modx-dashboard-widget-description'
                    ,xtype: 'textarea'
                    ,fieldLabel: _('description')
                    ,description: _('widget_description_desc')
                    ,anchor: '100%'
                    ,enableKeyEvents: true
                    ,listeners: {
                        'keyup': {scope:this,fn:function(f,e) {
                            var s = _(f.getValue());
                            if (s == undefined) { s = f.getValue(); }
                            Ext.getCmp('modx-dashboard-widget-description-trans').setValue(s);
                        }}
                    }
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-widget-description'
                    ,html: _('widget_description_desc')
                    ,cls: 'desc-under'
                },{
                    xtype: 'displayfield'
                    ,hideLabel: true
                    ,name: 'description_trans'
                    ,cls: 'desc-under desc-trans'
                    ,id: 'modx-dashboard-widget-description-trans'
                },{
                    xtype: 'modx-combo-dashboard-widget-type'
                    ,id: 'modx-dashboard-widget-type'
                    ,name: 'type'
                    ,hiddenName: 'type'
                    ,fieldLabel: _('widget_type')
                    ,description: _('widget_type_desc')
                    ,anchor: '100%'
                    ,value: config.record.type || 'html'
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-widget-type'
                    ,html: _('widget_type_desc')
                    ,cls: 'desc-under'
                }]
            },{
                columnWidth: .4
                ,items: [{
                    xtype: 'modx-combo-dashboard-widget-size'
                    ,name: 'size'
                    ,hiddenName: 'size'
                    ,id: 'modx-dashboard-widget-size'
                    ,fieldLabel: _('widget_size')
                    ,description: _('widget_size_desc')
                    ,anchor: '100%'
                    ,value: config.record.size || 'half'
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-widget-size'
                    ,html: _('widget_size_desc')
                    ,cls: 'desc-under'
                },{
                    xtype: 'modx-combo-permission'
                    ,name: 'permission'
                    ,hiddenName: 'permission'
                    ,id: 'modx-dashboard-permission'
                    ,fieldLabel: _('widget_permission')
                    ,description: _('widget_permission_desc')
                    ,anchor: '100%'
                    ,value: config.record.permission || ''
                    ,listeners: {
                        change: {
                            fn: function(cmp, newValue, oldValue) {
                                if (Ext.isEmpty(cmp.getValue())) {
                                    cmp.getStore().load();
                                }
                            },
                            scope: this
                        }
                    }
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-permission'
                    ,html: _('widget_permission_desc')
                    ,cls: 'desc-under'
                },{
                    xtype: 'modx-combo-namespace'
                    ,name: 'namespace'
                    ,hiddenName: 'namespace'
                    ,id: 'modx-dashboard-widget-namespace'
                    ,fieldLabel: _('widget_namespace')
                    ,description: _('widget_namespace_desc')
                    ,anchor: '100%'
                    ,value: config.record.namespace || 'core'
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-widget-namespace'
                    ,html: _('widget_namespace_desc')
                    ,cls: 'desc-under'
                },{
                    xtype: 'textfield'
                    ,name: 'lexicon'
                    ,hiddenName: 'lexicon'
                    ,id: 'modx-dashboard-widget-lexicon'
                    ,fieldLabel: _('lexicon')
                    ,description: _('widget_lexicon_desc')
                    ,anchor: '100%'
                    ,value: config.record.lexicon || 'core:dashboards'
                },{
                    xtype: MODx.expandHelp ? 'label' : 'hidden'
                    ,forId: 'modx-dashboard-widget-lexicon'
                    ,html: _('widget_lexicon_desc')
                    ,cls: 'desc-under'
                }]
            }]
        },{
            xtype: 'panel'
            ,border: false
            ,layout: 'form'
            ,style: 'padding-top: 15px' // new form panel, first label is not gonna have top padding
            ,labelAlign: 'top'
            ,items: [{
                xtype: 'textarea'
                ,name: 'content'
                ,fieldLabel: _('widget_content')
                ,anchor: '100%'
                ,height: 400
            }]
        }]
    });
    if (!Ext.isEmpty(config.record.id)) {
        itms.push({
            title: _('dashboards')
            ,hideMode: 'offsets'
            ,id: 'modx-panel-widget-dashboards'
            ,items: [{
                html: '<p>'+_('widget_dashboards.intro_msg')+'</p>'
                ,xtype: 'modx-description'
            },{
                xtype: 'modx-grid-dashboard-widget-dashboards'
                ,cls: 'main-wrapper'
                ,preventRender: true
                ,widget: config.record.id
                ,autoHeight: true
                ,listeners: {
                    'afterRemoveRow': {fn:this.markDirty,scope:this}
                    ,'updateRole': {fn:this.markDirty,scope:this}
                    ,'addMember': {fn:this.markDirty,scope:this}
                }
            }]
        });
        itms.push({
            title: _('properties')
            ,hideMode: 'offsets'
            ,id: 'modx-panel-widget-properties'
            ,layout: 'column'
            ,cls: 'main-wrapper'
            ,items: [{
                columnWidth: 0.4
                ,title: _('properties')
                ,layout: 'fit'
                ,border: false
                ,items: {
                    xtype: 'modx-orm-tree'
                    ,id: 'modx-extended-tree'
                    ,data: config.record.properties
                    ,formPanel: 'modx-panel-dashboard-widget'
                    ,prefix: 'properties'
                    ,enableDD: true
                    ,listeners: {
                        'click': {fn:function() {
                            Ext.getCmp('modx-extended-form').enable();
                        },scope:this}
                        ,'dragdrop': {fn:function() {
                            this.markDirty();
                        },scope:this}
                    }
                }
            },{
                xtype: 'modx-orm-form'
                ,columnWidth: 0.6
                ,title: _('editing_form')
                ,id: 'modx-extended-form'
                ,prefix: 'properties'
                ,treePanel: 'modx-extended-tree'
                ,formPanel: 'modx-panel-dashboard-widget'
            }]
        });
    }

    Ext.applyIf(config,{
        id: 'modx-panel-dashboard-widget'
        ,url: MODx.config.connector_url
        ,baseParams: {
            action: 'System/Dashboard/Widget/Update'
        }
        ,cls: 'container'
        ,defaults: { collapsible: false ,autoHeight: true }
        ,items: [this.getPageHeader(config),{
            xtype: 'modx-tabs'
            ,defaults: {
                autoHeight: true
                ,border: false
            }
            ,id: 'modx-dashboard-widget-tabs'
            ,forceLayout: true
            ,deferredRender: false
            ,stateful: true
            ,stateId: 'modx-dashboard-widget-tabpanel' + ((Ext.isEmpty(config.record.id)) ? '-new' : '')
            ,stateEvents: ['tabchange']
            ,getState:function() {
                return {activeTab:this.items.indexOf(this.getActiveTab())};
            }
            ,items: itms
        }]
        ,listeners: {
            'setup': {fn:this.setup,scope:this}
            ,'success': {fn:this.success,scope:this}
            ,'beforeSubmit': {fn:this.beforeSubmit,scope:this}
        }
    });
    MODx.panel.DashboardWidget.superclass.constructor.call(this,config);
    var ef = Ext.getCmp('modx-extended-form');
    if (ef) {
        ef.disable();
    }
};
Ext.extend(MODx.panel.DashboardWidget,MODx.FormPanel,{
    initialized: false

    ,setup: function() {
        if (this.initialized) { return false; }
        if (Ext.isEmpty(this.config.record.id)) {
            this.fireEvent('ready');
            return false;
        }
        this.getForm().setValues(this.config.record);
        Ext.getCmp('modx-header-breadcrumbs').updateHeader(Ext.util.Format.htmlEncode(this.config.record.name_trans));

        var d = this.config.record.dashboards;
        var g = Ext.getCmp('modx-grid-dashboard-widget-dashboards');
        if (d && g) {
            g.getStore().loadData(d);
        }

        this.fireEvent('ready',this.config.record);
        MODx.fireEvent('ready');
        this.initialized = true;
    }

    ,beforeSubmit: function(o) {
        var g = Ext.getCmp('modx-grid-dashboard-widget-dashboards');
        if (g) {
            Ext.apply(o.form.baseParams, {
                dashboards: g.encode()
            });
        }

        var et = Ext.getCmp('modx-extended-tree');
        if (et) {
            Ext.apply(o.form.baseParams, {
                properties: et.encode()
            });
        }
    }

    ,success: function(o) {
        if (Ext.isEmpty(this.config.record) || Ext.isEmpty(this.config.record.id)) {
            MODx.loadPage('system/dashboards/widget/update', 'id='+o.result.object.id);
        } else {
            Ext.getCmp('modx-abtn-save').setDisabled(false);
            var g = Ext.getCmp('modx-grid-dashboard-widget-dashboards');
            if (g) { g.getStore().commitChanges(); }
        }
    }

    ,getPageHeader: function(config) {
        return MODx.util.getHeaderBreadCrumbs('modx-dashboard-widget-header', [{
            text: _('dashboards'),
            href: MODx.getPage('system/dashboards')
        }, {
            text: _('widget'),
            href: null
        }]);
    }
});
Ext.reg('modx-panel-dashboard-widget',MODx.panel.DashboardWidget);

/**
 * @class MODx.grid.DashboardWidgetDashboards
 * @extends MODx.grid.LocalGrid
 * @param {Object} config An object of options.
 * @xtype modx-grid-dashboard-widget-dashboards
 */
MODx.grid.DashboardWidgetDashboards = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'modx-grid-dashboard-widget-dashboards'
        ,showActionsColumn: false
        ,url: MODx.config.connector_url
        ,action: 'System/Dashboard/GetList'
        ,fields: ['id','name','description']
        ,autoHeight: true
        ,primaryKey: 'widget'
        ,columns: [{
            header: _('dashboard')
            ,dataIndex: 'name'
            ,width: 200
            ,renderer: { fn: function(v,md,record) {
                return this.renderLink(v, {
                    href: '?a=system/dashboards/update&id=' + record.data.id
                    ,target: '_blank'
                });
            }, scope: this }
        },{
            header: _('description')
            ,dataIndex: 'description'
            ,width: 300
        }]
    });
    MODx.grid.DashboardWidgetDashboards.superclass.constructor.call(this,config);
    this.propRecord = Ext.data.Record.create(['id','name','description']);
};
Ext.extend(MODx.grid.DashboardWidgetDashboards,MODx.grid.LocalGrid);
Ext.reg('modx-grid-dashboard-widget-dashboards',MODx.grid.DashboardWidgetDashboards);

/**
 * SEEMS UNUSED
 * @class MODx.window.WidgetAddDashboard
 * @extends MODx.Window
 * @param {Object} config An object of options.
 * @xtype modx-window-widget-add-dashboard
 */
MODx.window.WidgetAddDashboard = function(config) {
    config = config || {};
    this.ident = config.ident || 'dbugadd'+Ext.id();
    Ext.applyIf(config,{
        title: _('widget_place')
        ,id: 'modx-window-widget-add-dashboard'
        ,fields: [{
            xtype: 'modx-combo-dashboard'
            ,fieldLabel: _('dashboard')
            ,name: 'dashboard'
            ,hiddenName: 'dashboard'
            ,id: 'modx-'+this.ident+'-dashboard'
            ,allowBlank: false
            ,msgTarget: 'under'
        }]
    });
    MODx.window.WidgetAddDashboard.superclass.constructor.call(this,config);
};
Ext.extend(MODx.window.WidgetAddDashboard,MODx.Window,{
    submit: function() {
        var f = this.fp.getForm();
        var fld = f.findField('widget');
        var g = Ext.getCmp('modx-grid-dashboard-widget-dashboards');
        var s = g.getStore();
        if (s.find('widget',fld.getValue()) != -1) {
            fld.markInvalid(_('dashboard_widget_err_placed'));
            return false;
        }

        if (id != '' && this.fp.getForm().isValid()) {
            var r = s.getTotalCount();

            if (this.fireEvent('success',{
                widget: fld.getValue()
                ,dashboard: g.config.dashboard
                ,name: fld.getRawValue()
                ,rank: r
            })) {
                this.fp.getForm().reset();
                this.hide();
                return true;
            }
        } else {
            MODx.msg.alert(_('error'),_('dashboard_err_ns'));
        }
        return true;
    }
});
Ext.reg('modx-window-widget-add-dashboard',MODx.window.WidgetAddDashboard);

/**
 * @class MODx.combo.DashboardWidgetType
 * @extends MODx.combo.ComboBox
 * @param {Object} config An object of options.
 * @xtype modx-combo-dashboard-widget-type
 */
MODx.combo.DashboardWidgetType = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: new Ext.data.SimpleStore({
            fields: ['d','v']
            ,data: [
                [_('widget_html'),'html']
                ,[_('widget_file'),'file']
                ,[_('widget_snippet'),'snippet']
                ,[_('widget_php'),'php']
            ]
        })
        ,name: 'type'
        ,hiddenName: 'type'
        ,displayField: 'd'
        ,valueField: 'v'
        ,mode: 'local'
        ,triggerAction: 'all'
        ,editable: false
        ,selectOnFocus: false
        ,preventRender: true
        ,forceSelection: true
        ,enableKeyEvents: true
    });
    MODx.combo.DashboardWidgetType.superclass.constructor.call(this,config);
};
Ext.extend(MODx.combo.DashboardWidgetType,MODx.combo.ComboBox);
Ext.reg('modx-combo-dashboard-widget-type',MODx.combo.DashboardWidgetType);

/**
 * @class MODx.combo.DashboardWidgetSize
 * @extends MODx.combo.ComboBox
 * @param {Object} config An object of options.
 * @xtype modx-combo-dashboard-widget-size
 */
MODx.combo.DashboardWidgetSize = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: new Ext.data.SimpleStore({
            fields: ['d','v']
            ,data: [
                [_('widget_size_quarter'),'quarter']
                ,[_('widget_size_one_third'),'one-third']
                ,[_('widget_size_half'),'half']
                ,[_('widget_size_two_third'),'two-third']
                ,[_('widget_size_three_quarters'),'three-quarters']
                ,[_('widget_size_full'),'full']
                ,[_('widget_size_double'),'double']
            ]
        })
        ,name: 'size'
        ,hiddenName: 'size'
        ,displayField: 'd'
        ,valueField: 'v'
        ,mode: 'local'
        ,triggerAction: 'all'
        ,editable: false
        ,selectOnFocus: false
        ,preventRender: true
        ,forceSelection: true
        ,enableKeyEvents: true
    });
    MODx.combo.DashboardWidgetSize.superclass.constructor.call(this,config);
};
Ext.extend(MODx.combo.DashboardWidgetSize,MODx.combo.ComboBox);
Ext.reg('modx-combo-dashboard-widget-size',MODx.combo.DashboardWidgetSize);
