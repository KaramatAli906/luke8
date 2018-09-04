{if $bean->module_name != 'Emails'}

    <h3 style="text-align: center;">{$lang.LBL_MODULE_NAME}&nbsp;-&nbsp;{$bean->name}</h3>
    <table width="100%">
        {foreach from=$panels item=fields key=panel_key }
            <tbody>
                <tr>
                    <td colspan="4" style="">
                        {if $panel_key != 'panel_body'}
                            <h3>{sugar_translate_custom label=$panel_key module=$bean->module_name}</h3>
                        {/if}
                    </td>
                </tr>
                {assign var=$count value=0}
                {foreach from=$fields item=field name=counter}
                    {if ($smarty.foreach.counter.iteration % 2) != 0}
                        <tr>                            
                            {if $field|is_array}
                                {assign var=field_name value=$field.name}
                                <td align="left" width="150" style="background-color:#E6E6E6;">
                                    <span>{sugar_translate_custom smarty_field_name=$field.name label=$field.label module=$bean->module_name}</span>
                                </td>
                                <td><span>{sugar_translate_custom bean=$bean id=$bean->email1 field_defs=$bean->field_defs value=$bean->$field_name smarty_field_name=$field_name label='' module=$bean->module_name}</span></td>

                            {else}
                                <td align="left" width="150" style="background-color:#E6E6E6;">
                                    <span>{sugar_translate_custom smarty_field_name=$field label='' module=$bean->module_name}</span>
                                </td>
                                <td><span>{sugar_translate_custom bean=$bean id=$bean->email1 field_defs=$bean->field_defs value=$bean->$field smarty_field_name=$field label='' module=$bean->module_name}</span></td>
                            {/if}
                        {else}
                            {if $field|is_array}
                                {assign var=field_name value=$field.name}
                                <td align="left" width="150" style="background-color:#E6E6E6;">
                                    <span>{sugar_translate_custom smarty_field_name=$field.name label=$field.label module=$bean->module_name}</span>
                                </td>
                                <td><span>{sugar_translate_custom bean=$bean id=$bean->email1 field_defs=$bean->field_defs value=$bean->$field_name smarty_field_name=$field_name label='' module=$bean->module_name}</span></td>
                            {else}
                                <td align="left" width="150" style="background-color:#E6E6E6;">
                                    <span>{sugar_translate_custom smarty_field_name=$field label='' module=$bean->module_name}</span>
                                </td>
                                <td><span>{sugar_translate_custom bean=$bean id=$bean->email1 field_defs=$bean->field_defs value=$bean->$field smarty_field_name=$field label='' module=$bean->module_name}</span></td>
                            {/if}
                        </tr>
                    {/if}
                {/foreach}
            </tbody>
        {/foreach}
    </table>

{else}
    <h3 style="text-align: center; ">{$lang.LBL_MODULE_NAME}&nbsp;-&nbsp;{$bean->name} </h3>
    <table width="100%">
        {foreach from=$panels item=fields key=panel_key }
            <tbody>
                <tr>
                    <td colspan="2" style="">
                        {if $panel_key != 'panel_body'}
                            <h3>{sugar_translate_custom label=$panel_key module=$bean->module_name}</h3>
                        {/if}
                    </td>
                </tr>
                {assign var=$count value=0}
                {foreach from=$fields item=field name=counter}

                    <tr>                            
                        {if $field|is_array}
                            {assign var=field_name value=$field.name}
                            <td align="left" width="30%" style="background-color:#E6E6E6;">
                                <span>{sugar_translate_custom smarty_field_name=$field.name label=$field.label module=$bean->module_name}</span>
                            </td>
                            <td><span>{sugar_translate_custom bean=$bean id=$bean->email1 field_defs=$bean->field_defs value=$bean->$field_name smarty_field_name=$field_name label='' module=$bean->module_name}</span></td>

                        {else}
                            <td align="left" width="30%" style="background-color:#E6E6E6;">
                                <span>{sugar_translate_custom smarty_field_name=$field label='' module=$bean->module_name}</span>
                            </td>
                            <td><span>{sugar_translate_custom bean=$bean id=$bean->email1 field_defs=$bean->field_defs value=$bean->$field smarty_field_name=$field label='' module=$bean->module_name}</span></td>
                        {/if}
                    </tr>

                {/foreach}
            </tbody>
        {/foreach}
    </table>
{/if}