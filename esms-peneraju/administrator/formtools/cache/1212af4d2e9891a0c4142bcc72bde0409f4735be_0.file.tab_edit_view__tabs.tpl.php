<?php
/* Smarty version 3.1.31, created on 2019-12-19 03:20:56
  from "C:\wamp64\www\e-SMS\esms-peneraju\administrator\formtools\themes\default\admin\forms\edit\tab_edit_view__tabs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dfaec988d39c5_44037249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1212af4d2e9891a0c4142bcc72bde0409f4735be' => 
    array (
      0 => 'C:\\wamp64\\www\\e-SMS\\esms-peneraju\\administrator\\formtools\\themes\\default\\admin\\forms\\edit\\tab_edit_view__tabs.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfaec988d39c5_44037249 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="hint margin_bottom_large">
    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_edit_tab_summary'];?>

  </div>

  <table class="list_table" cellpadding="0" cellspacing="1" id="tab_options_table" style="width: 350px; float: left">
    <tr>
      <th width="40"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_tab'];?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_tab_label'];?>
</th>
    </tr>
    <tr>
      <td align="center">1</td>
      <td><input type="text" name="tabs[]" id="tab_label1" class="tab_label" value="<?php echo $_smarty_tpl->tpl_vars['view_tabs']->value[1]['tab_label'];?>
" maxlength="50" /></td>
    </tr>
    <tr>
      <td align="center">2</td>
      <td><input type="text" name="tabs[]" id="tab_label2" class="tab_label" value="<?php echo $_smarty_tpl->tpl_vars['view_tabs']->value[2]['tab_label'];?>
" maxlength="50" /></td>
    </tr>
    <tr>
      <td align="center">3</td>
      <td><input type="text" name="tabs[]" id="tab_label3" class="tab_label" value="<?php echo $_smarty_tpl->tpl_vars['view_tabs']->value[3]['tab_label'];?>
" maxlength="50" /></td>
    </tr>
    <tr>
      <td align="center">4</td>
      <td><input type="text" name="tabs[]" id="tab_label4" class="tab_label" value="<?php echo $_smarty_tpl->tpl_vars['view_tabs']->value[4]['tab_label'];?>
" maxlength="50" /></td>
    </tr>
    <tr>
      <td align="center">5</td>
      <td><input type="text" name="tabs[]" id="tab_label5" class="tab_label" value="<?php echo $_smarty_tpl->tpl_vars['view_tabs']->value[5]['tab_label'];?>
" maxlength="50" /></td>
    </tr>
    <tr>
      <td align="center">6</td>
      <td><input type="text" name="tabs[]" id="tab_label6" class="tab_label" value="<?php echo $_smarty_tpl->tpl_vars['view_tabs']->value[6]['tab_label'];?>
" maxlength="50" /></td>
    </tr>
  </table>

  <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_remove_tabs'];?>
" onclick="view_ns.remove_tabs()" style="margin-left: 10px; float: left" />

  <div class="clear"></div>
<?php }
}
