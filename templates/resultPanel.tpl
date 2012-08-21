<table class="search_result">
	<tr>
		{foreach $result_headers as $field}
			<th>{$field}</th>
		{/foreach}
	</tr>
	{foreach $results as $row}
		<tr>
			{foreach $row as $cell}
				<td>
					{$cell}
				</td>
			{/foreach}
		</tr>
	{/foreach}
</table>