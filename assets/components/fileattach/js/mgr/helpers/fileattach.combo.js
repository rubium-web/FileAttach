Ext.namespace('FileAttach.combo');

FileAttach.combo.Tags = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        xtype: 'superboxselect',
        allowBlank: true,
        msgTarget: 'under',
        allowAddNewData: true,
        addNewDataOnBlur: true,
        pinList: false,
        resizable: true,
        name: 'fileattachtags',
        anchor: '100%',
        minChars: 2,
        //pageSize: 10,
        store: new Ext.data.JsonStore({
            root: 'results',
            autoLoad: false,
            autoSave: false,
            totalProperty: 'total',
            fields: ['tag'],
            url: FileAttach.config.connectorUrl,
            baseParams: {
                action: 'mgr/gettags'
            }
        }),
        mode: 'remote',
        displayField: 'tag',
        valueField: 'tag',
        triggerAction: 'all',
        extraItemCls: 'x-tag',
        expandBtnCls: 'x-form-trigger',
        clearBtnCls: 'x-form-trigger',
        listeners: {
            newitem: function (bs, v) {
                bs.addNewItem({tag: v});
            }
        }
    });
    config.name += '[]';
    FileAttach.combo.Tags.superclass.constructor.call(this, config);
};
Ext.extend(FileAttach.combo.Tags, Ext.ux.form.SuperBoxSelect);
Ext.reg('fileattach-combo-tags', FileAttach.combo.Tags);