{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>{$article.title}</h1>

<div class="grid  mb">
  <div class="u-2/3--portrait-tab-and-up grid__cell">
    <strong>Expedition:</strong> <a href="{$article.expeditionLink}">{$article.expedition}</a>
    <!--<br><strong>Author:</strong> {$article.author}-->
    <br><strong>Materials:</strong> {(($article.materials) ? implode (', ', $article.materials) : '<em class="comment">Unknown</em>')}
  </div>
  <div class="u-1/3--portrait-tab-and-up grid__cell">
    <strong>Date:</strong> {$article.date}
    <br><strong>Ref no:</strong> {$article.id}
  </div>
</div>

{$article.briefDescription}

<div id="photoGallery" class="gallery">
  <div class="grid">
  {foreach from=$article.images item=image}
    <div class="u-1/2 u-1/4--portrait-tab-and-up grid__cell">
      <a class="photo" href="{$image.large}" data-size="{$image.dimensions}" data-title="{$image.title}">
        <img src="{$image.thumbnail}" alt="{$image.title}">
      </a>
    </div>
  {/foreach}
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
      <img src="{$baseUrl}/images/teasers/expedition1.jpg" alt="">
      <div class="mini-teaser__caption">
        <strong>Aurora</strong>
        <br>1914-1917
      </div>
      <div class="mini-teaser__cta">View expedition &rarr;</div>
    </a>
  </div>
  <div class="u-1/2 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="biography.html">
      <img src="{$baseUrl}/images/pioneers/crean.jpg" alt="">
      <div class="mini-teaser__caption">
        <strong>Biography of Thomas Crean</strong>
      </div>
      <div class="mini-teaser__cta">View biography &rarr;</div>
    </a>
  </div>
</div>

<br><br>

{include file='search-form.tpl'}

{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}