<div id="controlPanel">
	{if $current_view!="search"}
		<a class="button" href="{$WEB_ROOT}/search.php">Search</a>
	{/if}
	{if $smarty.session.session==true}
		<a class="button" href="{$WEB_ROOT}/result.php?submit=history">History</a>
		<a class="button" href="?session=end">Logout</a>
	{else}
		<a class="button" href="?session=start">Login</a>
	{/if}
</div>