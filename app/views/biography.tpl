{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>{$person.name}</h1>

<img class="biography-portrait" src="{$person.portrait}" alt="{$person.name}">

<p><strong>Alias:</strong> {$person.alias}</p>
<p><strong>Rank:</strong> {$person.rank}</p>
<p><strong>Dates:</strong> {$person.date}</p>
<p><strong>Nationality:</strong> {$person.nationality}</p>
<p><strong>Awards:</strong> {$person.awards}</p>

{$person.about}


<br>

<header class="section-headings">
  <h3>Served aboard...</h3>
</header>

<div class="grid">
{foreach from=$person.expeditions item=expedition}
  <div class="u-1/2 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="mini-teaser" href="{$expedition.link}">
      <img src="{$expedition.image}" alt="{$expedition.title}">
      <div class="mini-teaser__caption">
        <strong>{$expedition.title}</strong>
        <br>{$expedition.date}
      </div>
      <div class="mini-teaser__cta">View expedition &rarr;</div>
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