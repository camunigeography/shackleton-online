{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>Shackleton Online</h1>

{include file='search-form.tpl'}

<header class="section-headings">
  <h3>Explore our exceptional collection of material related to Sir Ernest Shackleton</h3>
</header>

<p>Sir Ernest Shackleton (1874-1922) participated in four expeditions to the Antarctic during the 'Heroic Age' of Antarctic exploration, leading three of them. He was an impressive leader, known for his bravery and ability to build camaraderie in his crews.</p>
<p>The Shackleton Online resource is a space where you can find out more about Shackleton’s expeditions, crew mates, the places they travelled to, and the exceptional collections of papers, photographs and objects related to Shackleton held by the Scott Polar Research Institute.</p>

<br><hr>

{include file='_expeditions.tpl'}


<header class="section-headings">
  <h2><a href="{$baseUrl}/articles/">Treasures from the SPRI collection</a></h2>
  <h3>Delve into some of the unique items from our historic collection of papers, objects and images</h3>
</header>

<div class="grid">
{foreach from=$articles item=article}
  <div class="u-1/3 u-1/4--portrait-tab-and-up u-1/5--desktop grid__cell">
    <a class="image-cta" href="{$article.link}">
      <img src="{($article.images) ? $article.images.0.thumbnail : "$baseUrl/images/treasures/object.jpg"}" alt="{$article.title}">
      <div class="image-cta__caption">View treasure</div>
    </a>
  </div>
{/foreach}
</div>


<header class="section-headings">
  <h2><a href="{$baseUrl}/biographies/">Meet the pioneers</a></h2>
  <h3>Discover the lives and stories of Shackleton's intrepid companions</h3>
</header>

<div class="grid">
{foreach from=$people item=person}
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

<br />
<hr />

<header class="section-headings">
	<h2><a href="{$baseUrl}/videos/">Films</a></h2>
</header>

<p>In these <a href="{$baseUrl}/videos/">short films</a> about objects voted for by the public, you can learn more about Shackleton, the expeditions he went on, and his relationships with the people around him.</p>

<br />
<hr />



<header class="section-headings">
	<h2><a href="{$baseUrl}/audio/">Audio-described objects</a></h2>
</header>

<p>Listen to these accessible <a href="{$baseUrl}/audio/">audio descriptions</a> of ten objects in our Shackleton collection and find out more about what Shackleton and his men would have taken to the Antarctic.</p>

<br />
<hr />


<header class="section-headings">
	<h2><a href="https://www.spri.cam.ac.uk/museum/resources/">Learning resources</a></h2>
</header>

<p>Our website has <a href="https://www.spri.cam.ac.uk/museum/resources/">educational films and teacher packs</a> about Antarctica. Explore our educational film and teacher pack about Ernest Shackleton and the Endurance, aimed at 7-11 year olds!</p>

<br />
<hr />





<header class="section-headings">
  <h3>Shackleton Online has kindly been funded by the Heritage Lottery Fund, The Gladys Krieble Delmas Foundation, the Esm&eacute;e Fairbairn Collections Fund and the UK Antarctic Heritage Trust.</h3>
</header>

<div class="grid grid--small grid--middle">
  <div class="u-1/4 grid__cell">
    <img src="{$baseUrl}/images/hlf-logo.png" alt="Heritage Lottery Fund logo" style="display: block; margin: 0 auto;">
  </div>
  <div class="u-1/4 grid__cell">
    <img src="{$baseUrl}/images/gkdf-logo.png" alt="The Gladys Krieble Delmas Foundation logo" style="display: block; margin: 0 auto;">
  </div>
  <div class="u-1/4 grid__cell">
    <img src="{$baseUrl}/images/efcf-logo.png" alt="Esmee Fairbairn Collections Fund logo" style="display: block; margin: 0 auto;">
  </div>
  <div class="u-1/4 grid__cell">
    <img src="{$baseUrl}/images/ukaht-logo.png" alt="UK Antarctic Heritage Trust logo" style="display: block; margin: 0 auto;">
  </div>
</div>


<br><br>

&copy; Scott Polar Research Institute, University of Cambridge

{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}