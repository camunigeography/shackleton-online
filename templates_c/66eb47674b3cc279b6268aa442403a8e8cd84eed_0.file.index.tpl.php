<?php
/* Smarty version 3.1.30-dev/66, created on 2016-05-10 14:38:55
  from "/Users/Tom/Sites/ShackletonOnlineSmarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/66',
  'unifunc' => 'content_5731e46f1263e1_76986680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66eb47674b3cc279b6268aa442403a8e8cd84eed' => 
    array (
      0 => '/Users/Tom/Sites/ShackletonOnlineSmarty/templates/index.tpl',
      1 => 1462887533,
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
function content_5731e46f1263e1_76986680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cam/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Shackleton Online</h1>

<?php $_smarty_tpl->_subTemplateRender("file:search-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<header class="section-headings">
  <h2>Welcome to Shackleton Online</h2>
  <h3>Explore our exceptional collection of material related to Sir Ernest Shackleton</h3>
</header>

<p>Sir Ernest Shackleton (1874-1922) led three expeditions to the Antarctic during the ‘Heroic Age’ of Antarctic exploration. He was an impressive leader, known for his bravery and ability to build camaraderie in his crews.</p>
<p>The Shackleton Online resource is a space where you can find out more about Shackleton’s expeditions, crew mates, the places they travelled to, and the exceptional collections of papers, photographs and objects related to Shackleton held by the Scott Polar Research Institute.</p>

<br><hr>

<header class="section-headings">
  <h2>Explore the expeditions</h2>
  <h3>Learn about the iconic ships, famous crew and remarkable stories</h3>
</header>

<div class="grid">
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <a class="teaser-box" href="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['link'];?>
">
      <div class="teaser-box__title"><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['title'];?>
</div>
      <div class="teaser-box__body">
        <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['name'];?>

        <br>Led by <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['leader'];?>

        <br><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['date'];?>

      </div>
      <img class="teaser-box__img" src="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['bg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[0]['name'];?>
">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <a class="teaser-box" href="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['link'];?>
">
      <div class="teaser-box__title"><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['title'];?>
</div>
      <div class="teaser-box__body">
        <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['name'];?>

        <br>Led by <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['leader'];?>

        <br><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['date'];?>

      </div>
      <img class="teaser-box__img" src="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['bg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[1]['name'];?>
">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up u-1/3--desktop grid__cell">
    <a class="teaser-box" href="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['link'];?>
">
      <div class="teaser-box__title"><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['title'];?>
</div>
      <div class="teaser-box__body">
        <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['name'];?>

        <br>Led by <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['leader'];?>

        <br><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['date'];?>

      </div>
      <img class="teaser-box__img" src="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['bg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[2]['name'];?>
">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up u-1/3--desktop grid__cell">
    <a class="teaser-box" href="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['link'];?>
">
      <div class="teaser-box__title"><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['title'];?>
</div>
      <div class="teaser-box__body">
        <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['name'];?>

        <br>Led by <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['leader'];?>

        <br><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['date'];?>

      </div>
      <img class="teaser-box__img" src="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['bg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[3]['name'];?>
">
    </a>
  </div>
  <div class="u-1/2--portrait-tab-and-up u-1/3--desktop grid__cell">
    <a class="teaser-box" href="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['link'];?>
">
      <div class="teaser-box__title"><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['title'];?>
</div>
      <div class="teaser-box__body">
        <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['name'];?>

        <br>Led by <?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['leader'];?>

        <br><?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['date'];?>

      </div>
      <img class="teaser-box__img" src="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['bg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['expeditions']->value[4]['name'];?>
">
    </a>
  </div>
</div>


<header class="section-headings">
  <h2>Treasures from the SPRI collection</h2>
  <h3>Delve into some of the unique items from our historic collection of papers, objects and images</h3>
</header>

<div class="grid">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['treasures']->value, 'treasure');
foreach ($_from as $_smarty_tpl->tpl_vars['treasure']->value) {
$_smarty_tpl->tpl_vars['treasure']->_loop = true;
$__foreach_treasure_0_saved = $_smarty_tpl->tpl_vars['treasure'];
?>
  <div class="u-1/3 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="image-cta" href="<?php echo $_smarty_tpl->tpl_vars['treasure']->value['link'];?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['treasure']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['Treasure']->value['title'];?>
">
      <div class="image-cta__caption">View treasure</div>
    </a>
  </div>
<?php
$_smarty_tpl->tpl_vars['treasure'] = $__foreach_treasure_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>


<header class="section-headings">
  <h2>Meet the pioneers</h2>
  <h3>Discover the lives and stories of Shackleton's intrepid companions</h3>
</header>

<div class="grid">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pioneers']->value, 'pioneer');
foreach ($_from as $_smarty_tpl->tpl_vars['pioneer']->value) {
$_smarty_tpl->tpl_vars['pioneer']->_loop = true;
$__foreach_pioneer_1_saved = $_smarty_tpl->tpl_vars['pioneer'];
?>
  <div class="u-1/3 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="<?php echo $_smarty_tpl->tpl_vars['pioneer']->value['link'];?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['pioneer']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['pioneer']->value['name'];?>
">
      <div class="mini-teaser__caption">
        <strong><?php echo $_smarty_tpl->tpl_vars['pioneer']->value['name'];?>
</strong>
      </div>
      <div class="mini-teaser__cta">View profile &rarr;</div>
    </a>
  </div>
<?php
$_smarty_tpl->tpl_vars['pioneer'] = $__foreach_pioneer_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>


<header class="section-headings">
  <h3>Shackleton Online has kindly been funded by the Heritage Lottery Fund, The Gladys Krieble Delmas Foundation and the Esme&eacute; Fairbairn Collections Fund</h3>
</header>

<div class="grid grid--small grid--middle">
  <div class="u-1/3 grid__cell">
    <img src="/images/hlf-logo.png" alt="Heritage Lottery Fund logo" style="display: block; margin: 0 auto;">
  </div>
  <div class="u-1/3 grid__cell">
    <img src="/images/gkdf-logo.png" alt="The Gladys Krieble Delmas Foundation logo" style="display: block; margin: 0 auto;">
  </div>
  <div class="u-1/3 grid__cell">
    <img src="/images/efcf-logo.png" alt="Esmee Fairbairn Collections Fund logo" style="display: block; margin: 0 auto;">
  </div>
</div>


<br><br>

&copy; Scott Polar Research Institute, University of Cambridge

<?php $_smarty_tpl->_subTemplateRender("file:cam/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
