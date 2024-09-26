{if isSet ($integrationEnabled)}
	{include file='head.tpl'}
{else}
	{include file='cam/header.tpl'}
{/if}

<h1>Shackleton Online: Films</h1>

<p id="breadcrumb">You are in: &nbsp; <a href="{$baseUrl}/">Shackleton Online</a> &raquo; Films</p>


<p>In these short films about objects voted for by the public, you can learn more about Shackleton, the expeditions he went on, and his relationships with the people around him.</p>

{include file='_video_chronometer.tpl'}
{include file='_video_flag.tpl'}
{include file='_video_goggles.tpl'}


{if isSet ($integrationEnabled)}
	{include file='foot.tpl'}
{else}
	{include file='cam/footer.tpl'}
{/if}

