<h2>Add Puppy</h2>

<?php echo (isset($flash_message))?'<div>'.$flash_message.'</div>':''; ?>

<?php echo $this->Form->create('Puppy', array('role'=>'form', 'class'=>'form-horizontal')); ?>
<?php 
	
	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Color', array('for'=>'color', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-10',
			$this->Html->tag('input', '', array('type'=>'text', 'name'=>'color', 'id'=>'color', 'class'=>'form-control ')),
			array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Male?', array('for'=>'is_male', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-10',
			$this->Form->checkbox('is_male', array('name'=>'is_male')),
			array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Birthtime', array('for'=>'birthtime', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-10',
			$this->Html->tag('input', '', array('type'=>'text', 'name'=>'birthtime', 'id'=>'birthtime', 'class'=>'form-control ')),
			array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Litter', array('for'=>'litter', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-4',
			$this->Form->select(
	        	'litter',
	        	array($litters),
	        	array('class'=>'form-control','name'=>'litters')
	        ),
	        array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Available?', array('for'=>'is_available', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-10',
			$this->Form->checkbox('is_available', array('name'=>'is_available')),
			array()
		),
		array()
	);

	echo $this->Html->div(
		'form-group',
		$this->Html->tag('label', 'Forever Home', array('for'=>'forever_home', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-10',
			$this->Html->tag('input', '', array('type'=>'text', 'name'=>'forever_home', 'id'=>'forever_home', 'class'=>'form-control ')),
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