<div id="moduleTitle">
    <h2>{$MOD.LBL_EXELSHEET_FIELDS_MAPPING}</h2>
    <form id="excelSheetFieldsMapping" name="excelSheetFieldsMapping" method="POST" enctype="multipart/form-data" >
        <table width="100%">
            <tbody>
                <tr><td style="white-space:nowrap; padding-right: 10px !important;">
                        Excesheet
                        <input type="file" id="fileSelect" name="excel" size="40">
                    </td>
                    <td>
                        <input class="button primary" name="upload" value="Upload" type="submit">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="padding-top: 2px;">
                            <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary" type="submit" id="download" name="download" value="Download" />
                            &nbsp;
                            <input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" onclick="document.location.href = 'index.php?module=Administration&action=excelSheetFieldsMapping'" class="button" type="button" name="cancel" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" />
                        </div>
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                            <thead>
                                <tr>
                                    <th align="left" scope="row"><h4>{$MOD.LBL_EXCEL_FIELDS}</h4></th>
                                    <th align="left" scope="row"><h4>{$MOD.LBL_BUILDINGS}</h4></th>
                                </tr>
                            </thead>
                            <tbody id="module_fields"></tbody>
                        </table>
                    </td>
                </tr>

            </tbody>
        </table>     
    </form>
</div>

{literal}
    <script type="text/javascript" src="custom/modules/Administration/js/excelsheet_fields_mapping.js"></script>
{/literal}


