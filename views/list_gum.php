<h2>Gum Vault</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Brand</th>
			<th>Quantity</th>
			<th>Rank</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$lines = file('data/gum.csv',FILE_IGNORE_NEW_LINES);
		$i = 0;
		foreach($lines as $line) {
			$parts = explode(',',$line);
			$brand = $parts[0];
			$quantity = $parts[1];
			$rank = $parts[2];
			
			echo'<tr>';
			echo 	"<td>$brand</td>";
			echo 	"<td>$quantity</td>";
			echo 	"<td>$rank</td>";
			echo	"<td><button><a href=\"./?p=edit_gum&brand=$i\"><i class=\"icon-edit\"></i>Edit</a></button> <button class=\"\"><a href=\"actions/delete_gum.php?gum=$i\"><i class=\"icon-edit\"></i>Delete</a></button></td>";
			echo'</tr>';
			$i++;
		}
		
		?>
	</tbody>
</table>

