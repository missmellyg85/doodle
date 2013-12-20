<h2>Add Litter</h2>

<?php echo (isset($flash_message))?'<div>'.$flash_message.'</div>':''; ?>

<?php echo $this->Form->create('Litter', array('role'=>'form', 'class'=>'form-horizontal')); ?>
<?php 
	
	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Mom', array('for'=>'mom', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-4',
			$this->Form->select(
	        	'mom',
	        	array($moms),
	        	array('class'=>'form-control','name'=>'mom')
	        ),
	        array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Dad', array('for'=>'dad', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-4',
			$this->Form->select(
	        	'dad',
	        	array($dads),
	        	array('class'=>'form-control','name'=>'dad')
	        ),
	        array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Active?', array('for'=>'is_active', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-10',
			$this->Form->checkbox('is_active', array('name'=>'is_active')),
			array()
		),
		array()
	);

	echo $this->Html->div(
	'form-group',
	$this->Html->div(
		'col-md-offset-2 col-md-2',
		$this->Form->submit(
    		'Add Litter',
    		array('class'=>'btn btn-primary')
    	),
    	array()
	),
	
	array()
);

	echo $this->Form->end();
?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Litters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Adults'), array('controller' => 'adults', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Litter Mom'), array('controller' => 'adults', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puppies'), array('controller' => 'puppies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puppy'), array('controller' => 'puppies', 'action' => 'add')); ?> </li>
	</ul>
</div>
