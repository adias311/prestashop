<?php
/* Smarty version 4.5.5, created on 2025-09-25 06:02:25
  from '/var/www/html/prestashop_edition_basic_version_9.0.0-1.0/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d478819f52d8_05177425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a69600141b29da7ca7dfb4073253211372ffab7c' => 
    array (
      0 => '/var/www/html/prestashop_edition_basic_version_9.0.0-1.0/themes/classic/templates/_partials/helpers.tpl',
      1 => 1746161722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d478819f52d8_05177425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prestashop_edition_basic_version_9.0.0-1.0/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/a6/96/00/a69600141b29da7ca7dfb4073253211372ffab7c_2.file.helpers.tpl.php',
    'uid' => 'a69600141b29da7ca7dfb4073253211372ffab7c',
    'call_name' => 'smarty_template_function_renderLogo_963510668d478819e94b7_68564862',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_963510668d478819e94b7_68564862 */
if (!function_exists('smarty_template_function_renderLogo_963510668d478819e94b7_68564862')) {
function smarty_template_function_renderLogo_963510668d478819e94b7_68564862(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_963510668d478819e94b7_68564862 */
}
