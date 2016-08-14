{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>{$expedition.name}</h1>

<img class="mb" src="{$expedition.banner}" alt="{$expedition.name}">

<br>

<div class="grid  mb">
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <strong>Expedition:</strong> {$expedition.name}
    <br><strong>Date:</strong> {$expedition.date}
  </div>
  <div class="u-1/2--portrait-tab-and-up grid__cell">
    <strong>Leader:</strong> {$expedition.leader}
  </div>
</div>

{$expedition.about}

<header class="section-headings">
  <h3>Personnel</h3>
</header>

<div class="grid">
{foreach from=$expedition.people item=person}
  <div class="u-1/2 u-1/4--portrait-tab u-1/3--landscape-tab u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="{$person.link}">
      <img src="{($person.image) ? $person.image : "$baseUrl/images/pioneers/person.jpg"}" alt="{$person.name}">
      <div class="mini-teaser__caption">
        <strong>{$person.name}</strong>
        <br>{$person.role|ucfirst}
      </div>
      <div class="mini-teaser__cta">View profile &rarr;</div>
    </a>
  </div>
{/foreach}
</div>


<header class="section-headings">
  <h3>Items from the collection</h3>
</header>

<div class="grid">
{foreach from=$expedition.treasures item=treasure}
  <div class="u-1/3 u-1/4--portrait-tab u-1/5--landscape-tab-and-up grid__cell">
    <a class="image-cta" href="{$treasure.link}">
      <img src="{$treasure.thumbnail}" alt="{$treasure.title}">
      <div class="image-cta__caption">View treasure</div>
    </a>
  </div>
{/foreach}
</div>

<br>

{include file='search-form.tpl'}

{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}