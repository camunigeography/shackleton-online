{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>Videos</h1>


<p>In these short films about objects voted for by the public, you can learn more about Shackleton, the expeditions he went on, and his relationships with the people around him.</p>

<h2>Endurance Expedition chronometer</h2>

<video width="854" height="480" controls="controls" poster="chronometer.jpg">
	<source src="chronometer.mp4" type="video/mp4" ;>
	<p>Your browser does not support the video tag.</p>
</video>


<h2>Discovery Expedition goggles</h2>

<video width="854" height="480" controls="controls" poster="goggles.jpg">
	<source src="goggles.mp4" type="video/mp4" ;>
	<p>Your browser does not support the video tag.</p>
</video>


<h2>Nimrod Expedition sledging flag</h2>

<video width="854" height="480" controls="controls" poster="sledging.jpg">
	<source src="sledging.mp4" type="video/mp4" ;>
	<p>Your browser does not support the video tag.</p>
</video>



{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}

