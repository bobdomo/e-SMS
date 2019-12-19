<?php
/* Smarty version 3.1.31, created on 2019-12-19 03:17:13
  from "C:\wamp64\www\e-SMS\esms-peneraju\administrator\formtools\themes\default\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5dfaebb94c98e4_39160498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd05cc0f86a45dfbf67ae3bc2c1867bf911047b5f' => 
    array (
      0 => 'C:\\wamp64\\www\\e-SMS\\esms-peneraju\\administrator\\formtools\\themes\\default\\footer.tpl',
      1 => 1573338106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfaebb94c98e4_39160498 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once 'C:\\wamp64\\www\\e-SMS\\esms-peneraju\\administrator\\formtools\\global\\smarty_plugins\\function.show_page_load_time.php';
?>

      </div>
    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
