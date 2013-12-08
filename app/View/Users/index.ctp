<table class="table table-bordered table-striped">
	<tr>
		<th>User</th>
		<th>Role</th>
		<th>Modified</th>
		<th>Created</th>
	</tr>
<?php
	foreach ($users as $u) {
		$u = $u['User'];
		echo "<tr>";
		echo "<td>".$u['username']."</td>";
		echo "<td>".$u['role']."</td>";
		echo "<td>".$u['modified']."</td>";
		echo "<td>".$u['created']."</td>";
		echo "</tr>";
	}
?>
</table>