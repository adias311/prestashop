<?php
/* Smarty version 4.5.5, created on 2025-09-25 06:02:25
  from '/var/www/html/prestashop_edition_basic_version_9.0.0-1.0/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d478819b71a7_49434066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7edb44fb82558eabf2bc6218471f06f5cceff47' => 
    array (
      0 => '/var/www/html/prestashop_edition_basic_version_9.0.0-1.0/themes/classic/templates/index.tpl',
      1 => 1746161722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d478819b71a7_49434066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32653575168d478819b5795_82076539', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_132696731768d478819b5d98_10135669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_200641495068d478819b6501_60746034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_201313349068d478819b6292_83010513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200641495068d478819b6501_60746034', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_32653575168d478819b5795_82076539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_32653575168d478819b5795_82076539',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_132696731768d478819b5d98_10135669',
  ),
  'page_content' => 
  array (
    0 => 'Block_201313349068d478819b6292_83010513',
  ),
  'hook_home' => 
  array (
    0 => 'Block_200641495068d478819b6501_60746034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132696731768d478819b5d98_10135669', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201313349068d478819b6292_83010513', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
