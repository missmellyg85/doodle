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
		$this->Html->tag('label', 'Birthdate', array('for'=>'dob', 'class'=>'col-md-2')).
		$this->Html->div(
			'col-md-3',
			'<input id="dp1" name="dob" id="dob" class="form-control" type="text" value="'.date('m/d/y').'" data-date-format="mm/dd/yy">',
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
<script>
	$(document).ready(function() {
		var d = new Date();
		var today = ""+(d.getMonth()+1)+"/"+(d.getDate())+"/"+(d.getFullYear().toString().slice(2,4))+"";
	    $('#dp1').datepicker('setValue', today).on('changeDate', function(ev){ $('.datepicker').hide();});
	});
</script>