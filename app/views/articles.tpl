{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>Shackleton Online: Articles</h1>

<p id="breadcrumb">You are in: &nbsp; <a href="{$baseUrl}/">Shackleton Online</a> &raquo; Treasures from the SPRI collection</p>

<header class="section-headings">
  <h2>Treasures from the SPRI collection</h2>
  <h3>Delve into some of the unique items from our historic collection of papers, objects and images</h3>
</header>


<div class="grid">
{foreach from=$articles item=article}
  <div class="u-1/3 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="image-cta" href="{$article.link}">
      <img src="{($article.images) ? $article.images.0.path : "$baseUrl/images/treasures/object.jpg"}" alt="{$article.title}" />
      <div class="image-cta__caption">{$article.title|htmlspecialchars}</div>
    </a>
  </div>
{/foreach}
</div>

<br><br>

{include file='search-form.tpl'}

{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}