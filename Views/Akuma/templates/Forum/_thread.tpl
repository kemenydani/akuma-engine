{extends file="Global/_full.tpl"} 

{block name=content}
<section id="content">
    <div class="container">
		<br><br>
		<h1>{$thread.thread_title}</h1>
		<hr>
		{if $user.user_id == $thread.user_id || $user.level == 10}
			<button onclick="window.location.href='{$base}forum/edit_thread/{$thread.thread_id}/'"class="button button-dark button-medium">Edit</button>
			{if $user.level == 10}
				{*<button onclick="window.location.href='{$base}forum/delete_thread/{$thread.thread_id}/'"class="button button-dark button-medium">Delete</button>*}
				{*
				{if $thread.active == 1}
					<button onclick="window.location.href='{$base}forum/activate_thread/{$forum_id}/'"class="button button-dark button-medium">Deactivate</button>
				{else}
					<button onclick="window.location.href='{$base}forum/edit_thread/{$forum_id}/'"class="button button-dark button-medium">Activate</button>
				{/if}
				*}
			{/if}
			<hr>
		{/if}
	    <p class="text-justify"><b>{$thread.thread_text}</b></p>
    </div>
	<br>
	{include file="Global/_widget_comment.tpl" controller=$controller item_id_key='thread_id' item_id=$thread.thread_id}
</section>
{/block}