<h1>Expeditions</h1>

{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<p id="breadcrumb">You are in: &nbsp; <a href="{$baseUrl}/">Shackleton Online</a> &raquo; Explore the expeditions</p>

{include file='_expeditions.tpl'}


<br><br>

{include file='search-form.tpl'}

{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}