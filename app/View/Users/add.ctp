<h2>Add User</h2>

<?php echo (isset($flash_message))?'<div>'.$flash_message.'</div>':''; ?>

<?php echo $this->Form->create('User', array('role'=>'form', 'class'=>'form-horizontal')); ?>
<?php 
echo $this->Html->div(
	'form-group',
	$this->Html->tag('label', 'Username', array('for'=>'username', 'class'=>'col-md-2')).
	$this->Html->div(
		'col-md-10',
		$this->Html->tag('input', '', array('type'=>'text', 'name'=>'username', 'id'=>'username', 'class'=>'form-control ')),
		array()
	),
	array()
);

echo $this->Html->div(
	'form-group',
	$this->Html->tag('label', 'Password', array('for'=>'password', 'class'=>'col-md-2')).
	$this->Html->div(
		'col-md-10',
		$this->Html->tag('input', '', array('type'=>'text', 'name'=>'password', 'id'=>'password', 'class'=>'form-control')),
		array()
	),
	array()
);

echo $this->Html->div(
	'form-group',
	$this->Html->tag('label', 'Role', array('for'=>'role', 'class'=>'col-md-2')).
	$this->Html->div(
		'col-md-4',
		$this->Form->select(
        	'role',
        	array('admin'=>'Admin', 'nonadmin'=>'NonAdmin'),
        	array('class'=>'form-control','name'=>'role')
        ),
        array()
	),
	array()
);


echo $this->Html->div(
	'form-group',
	$this->Html->div(
		'col-md-offset-2 col-md-2',
		$this->Form->submit(
    		'Add User',
    		array('class'=>'btn btn-primary')
    	),
    	array()
	),
	
	array()
);

echo $this->Form->end();
?>