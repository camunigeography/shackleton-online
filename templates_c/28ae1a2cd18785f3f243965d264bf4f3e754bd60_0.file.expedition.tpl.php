<?php
/* Smarty version 3.1.30-dev/66, created on 2016-05-10 14:56:54
  from "/Users/Tom/Sites/ShackletonOnlineSmarty/templates/expedition.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/66',
  'unifunc' => 'content_5731e8a66ce807_09169701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ae1a2cd18785f3f243965d264bf4f3e754bd60' => 
    array (
      0 => '/Users/Tom/Sites/ShackletonOnlineSmarty/templates/expedition.tpl',
      1 => 1462888613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cam/header.tpl' => 1,
    'file:search-form.tpl' => 1,
    'file:cam/footer.tpl' => 1,
  ),
),false)) {
function content_5731e8a66ce807_09169701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cam/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1><?php echo $_smarty_tpl->tpl_vars['expedition']->value['name'];?>
</h1>

<img class="mb" src="<?php echo $_smarty_tpl->tpl_vars['expedition']->value['banner'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['expedition']->value['name'];?>
">

<br>

<div class="grid  mb">
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <strong>Expedition:</strong> <?php echo $_smarty_tpl->tpl_vars['expedition']->value['name'];?>

    <br><strong>Date:</strong> <?php echo $_smarty_tpl->tpl_vars['expedition']->value['date'];?>

  </div>
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <strong>Leader:</strong> <?php echo $_smarty_tpl->tpl_vars['expedition']->value['leader'];?>

  </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['expedition']->value['bodyCopy'];?>


<header class="section-headings">
  <h3>Personnel</h3>
</header>

<div class="grid">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expedition']->value['personnel'], 'person');
foreach ($_from as $_smarty_tpl->tpl_vars['person']->value) {
$_smarty_tpl->tpl_vars['person']->_loop = true;
$__foreach_person_0_saved = $_smarty_tpl->tpl_vars['person'];
?>
  <div class="u-1/2 u-1/4--portrait-tab u-1/3--landscape-tab u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="<?php echo $_smarty_tpl->tpl_vars['person']->value['link'];?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['person']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['person']->value['name'];?>
">
      <div class="mini-teaser__caption">
        <strong><?php echo $_smarty_tpl->tpl_vars['person']->value['name'];?>
</strong>
        <br><?php echo $_smarty_tpl->tpl_vars['person']->value['role'];?>

      </div>
      <div class="mini-teaser__cta">View profile &rarr;</div>
    </a>
  </div>
<?php
$_smarty_tpl->tpl_vars['person'] = $__foreach_person_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>


<header class="section-headings">
  <h3>Items from the collection</h3>
</header>

<div class="grid">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expedition']->value['treasures'], 'treasure');
foreach ($_from as $_smarty_tpl->tpl_vars['treasure']->value) {
$_smarty_tpl->tpl_vars['treasure']->_loop = true;
$__foreach_treasure_1_saved = $_smarty_tpl->tpl_vars['treasure'];
?>
  <div class="u-1/3 u-1/4--portrait-tab u-1/5--landscape-tab-and-up grid__cell">
    <a class="image-cta" href="<?php echo $_smarty_tpl->tpl_vars['treasure']->value['link'];?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['treasure']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['treasure']->value['title'];?>
">
      <div class="image-cta__caption">View treasure</div>
    </a>
  </div>
<?php
$_smarty_tpl->tpl_vars['treasure'] = $__foreach_treasure_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>

<br>

<?php $_smarty_tpl->_subTemplateRender("file:search-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:cam/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
