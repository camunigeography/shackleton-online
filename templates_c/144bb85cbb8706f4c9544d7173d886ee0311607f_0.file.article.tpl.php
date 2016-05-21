<?php
/* Smarty version 3.1.30-dev/66, created on 2016-05-10 15:18:44
  from "/Users/Tom/Sites/ShackletonOnlineSmarty/templates/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/66',
  'unifunc' => 'content_5731edc41c0a20_00651012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '144bb85cbb8706f4c9544d7173d886ee0311607f' => 
    array (
      0 => '/Users/Tom/Sites/ShackletonOnlineSmarty/templates/article.tpl',
      1 => 1462889917,
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
function content_5731edc41c0a20_00651012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cam/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</h1>

<div class="grid  mb">
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <strong>Expedition:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['expeditionLink'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['expedition'];?>
</a>
    <br><strong>Author:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

  </div>
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <strong>Date:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>

    <br><strong>Ref no:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['ref'];?>

  </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['article']->value['bodyCopy'];?>


<div id="photoGallery" class="gallery">
  <div class="grid">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['images'], 'image');
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved = $_smarty_tpl->tpl_vars['image'];
?>
    <div class="u-1/2 u-1/4--portrait-tab-and-up grid__cell">
      <a class="photo" href="<?php echo $_smarty_tpl->tpl_vars['image']->value['large'];?>
" data-size="<?php echo $_smarty_tpl->tpl_vars['image']->value['dimensions'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
">
      </a>
    </div>
  <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  </div>
</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <button class="pswp__button pswp__button--share" title="Share"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>
      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button>
      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>
    </div>
  </div>
</div>


<h3>Other relevant information</h3>

<div class="grid">
  <div class="u-1/2 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="expedition.html">
      <img src="/images/teasers/expedition1.jpg" alt="">
      <div class="mini-teaser__caption">
        <strong>Aurora</strong>
        <br>1914-1917
      </div>
      <div class="mini-teaser__cta">View expedition &rarr;</div>
    </a>
  </div>
  <div class="u-1/2 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="biography.html">
      <img src="/images/pioneers/crean.jpg" alt="">
      <div class="mini-teaser__caption">
        <strong>Biography of Thomas Crean</strong>
      </div>
      <div class="mini-teaser__cta">View biography &rarr;</div>
    </a>
  </div>
</div>

<br><br>

<?php $_smarty_tpl->_subTemplateRender("file:search-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:cam/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
