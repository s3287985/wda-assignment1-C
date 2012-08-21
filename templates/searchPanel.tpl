<div id="wine_search">
		<form method="GET" action="{$link}" >
<div class="form_field">
	<span >Wine name:</span>
	<input type = "text" value="{$smarty.get.wineName}" name="wineName">
</div>
<div class="form_field">
	<span >Winery name:</span>
	<input type = "text" value="{$smarty.get.wineryName}" name="wineryName">
</div>
<div class="form_field">
	<span >Region: </span>
	<select name="region">
	{foreach $regions as $region}
		<option value = "{$region}" {if $region eq $smarty.get.region}selected = "selected"{/if}>{$region}</option>
	{/foreach}
	</select>
</div>
<div class="form_field">
	<span >Grape Variety: </span>
	<select name="variety">
		{foreach $varieties as $variety}
			<option value = "{$variety}" {if $variety eq $smarty.get.variety}selected = selected{/if}>{$variety}</option>
		{/foreach}
	</select>
</div>
<div class="form_field">
	<span >Year: </span>
	<span >from </span>
	<select name="minYear">
		{for $year=$minYear to $maxYear}
			<option value="{$year}"
			{if $year==$smarty.get.minYear}selected = selected
			{elseif $year==$minYear and $smarty.get.minYear==''} selected = selected{/if}>{$year}</option>
		{/for}
	</select>
	<span > to </span>
	<select name="maxYear">
		{for $year=$minYear to $maxYear}
			<option value="{$year}"
			{if $year==$smarty.get.maxYear}selected = selected
			{elseif $year==$maxYear and $smarty.get.maxYear==''} selected = selected{/if}>{$year}</option>
		{/for}
	</select>
</div>
<div class="form_field">
	<span >Min stock: </span>
	<input type = "text" value="{$smarty.get.stock}" name="stock">
</div>
<div class="form_field">
	<span >Min ordered: </span>
	<input type = "text" value="{$smarty.get.ordered}" name="ordered">
</div>
<span >Price</span>
<div class="form_field">
	<span >from: </span>
	<input type = "text" value="{$smarty.get.minPrice}" name="minPrice">
</div>
<div class="form_field">
	<span >to: </span>
	<input type = "text" value="{$smarty.get.maxPrice}" name="maxPrice">
</div>
<div class="form_field">
	<input type = "submit" value="search" name="submit" class="button"/>
</div>
</form>
</div>