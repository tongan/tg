<script type="text/javascript">
// <![CDATA[
    var win;    

    {literal}
    MODx.load({
    {/literal}
        xtype: 'clichethumbnail-panel-tv'
        ,tv: '{$tv->id}'
        ,tvValue: '{$tv->value|escape}'
        ,width: '97%'
        {if $itemjson},data: {$itemjson}{/if}
    {literal}
    });
    {/literal}
// ]]>
</script>