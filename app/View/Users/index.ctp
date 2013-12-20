<div class="col-md-12" id="user-admin">
	<h2>Users</h2>

	<?php echo (isset($flash_message))?'<div>'.$flash_message.'</div>':''; ?>

	<?php
		echo $this->Html->tag(
			'span',
			$this->Html->link('Add New User', array('controller'=>'Users', 'action'=>'Add')),
			array('class'=>'pull-right')
			);
	?>
	<table class="table table-bordered table-striped">
	<?php echo $this->Html->tableHeaders(array('User', 'Role', 'Modified', 'Created', 'Actions'));
		
		foreach ($users as $u) {
			$u = $u['User'];
			$cells[] = array(
				$u['username'],
				$u['role'],
				date('Y-m-d H:i:s', strtotime($u['modified'])),
				date('Y-m-d H:i:s', strtotime($u['created'])),
				$this->Html->link('Delete', array('controller'=>'Users', 'action'=>'delete', $u['id']), array(), "Are you sure you would like to delete this user? This will delete them permanently.")
			);
		}
		echo $this->Html->tableCells($cells);
	?>
	</table>
</div>