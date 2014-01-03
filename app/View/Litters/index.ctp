<div class="col-md-12">
	<h2>Litters</h2>
	<?php echo (isset($flash_message))?'<div>'.$flash_message.'</div>':''; ?>

	<?php
		echo $this->Html->tag(
			'span',
			$this->Html->link('Add New Litter', array('controller'=>'Litters', 'action'=>'Add')),
			array('class'=>'pull-right')
			);
	?>
	<table class="table table-bordered table-striped">
	<?php 
		echo $this->Html->tableHeaders(array('Id', 'Mom', 'Dad', '# Puppies', 'Status', 'Actions'));

		$cells = array();
		foreach ($litters as $litter) {
			$cells[] = array(
				$litter['Litter']['litter_id'],
				$litter['Mom']['name'],
				$litter['Dad']['name'],
				sizeof($litter['Puppy']),
				array(
					($litter['Litter']['is_active'])?'Active':'Inactive',
					array('class'=>($litter['Litter']['is_active'])?'text-success':'text-danger')
				),
				$this->Html->link('Delete', array('controller'=>'Litters', 'action'=>'delete', $litter['Litter']['litter_id']), array(), "Are you sure you want to delete this litter? You cannot undo this action.").' | '.
				$this->Html->link('View', array('controller'=>'Litters', 'action'=>'view', $litter['Litter']['litter_id']))
			);
		}
		echo $this->Html->tableCells($cells);
	?>
	</table>
</div>