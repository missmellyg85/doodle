<div class="span12">
	<h2>Litters</h2>
	<?php
		echo $this->Html->tag(
			'span',
			$this->Html->link('Add New User', array('controller'=>'Users', 'action'=>'Add')),
			array('class'=>'pull-right')
			);
	?>
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
</div>