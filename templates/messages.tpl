{foreach from=$errors item=error}
	<div class="error">
		{$error}
	</div>
{/foreach}

{foreach from=$success item=s}
	<div class="success">
		{$s}
	</div>
{/foreach}