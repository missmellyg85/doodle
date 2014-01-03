<h2>Add Puppies</h2>

<?php echo (isset($flash_message))?'<div>'.$flash_message.'</div>':''; ?>
<div class="row">
<?php echo $this->Form->create('Puppy', array('role'=>'form', 'class'=>'form-inline col-md-12'));

	echo $this->Html->div(
		'row',
		$this->Html->tag('label', 'Litter', array('for'=>'litter', 'class'=>'col-md-2 text-left')).
		$this->Html->div(
			'col-md-8',
			$this->Form->select(
	        	'litter',
	        	array($litters),
	        	array('class'=>'form-control','name'=>'litters','style'=>'float:left','required'=>'required')
	        ),
	        array()
		).
		$this->Html->div(
			'col-md-2 text-right',
			$this->Html->tag(
				'a', 
				'Add New Row '.$this->Html->tag('span', '', array('class'=>'glyphicon glyphicon-plus-sign')), 
				array('id'=>'add_puppy_btn')),
			array()
		),
		array()
	);

	echo '<table class="table-bordered col-md-12" style="margin-top:20px;" id="add_puppy_table">'.$this->Html->tableHeaders(array('Color', 'Male?', 'Available?', 'Forever Home', 'Remove'));

	$cells = array(
		'<div class="form-group"><input type="text" required="required" name="data[Puppy][0][color]" class="color form-control" /></div>',
		'<div class="form-group text-center">
			<input type="hidden" name="data[Puppy][0][is_male]" class="is_male form-control" value="0"/>
			<input type="checkbox" name="data[Puppy][0][is_male]" class="is_male form-control" value="1"/>
			</div>',
		'<div class="form-group text-center">
			<input type="hidden" name="data[Puppy][0][is_available]" class="is_available form-control" value="0" />
			<input type="checkbox" name="data[Puppy][0][is_available]" class="is_available form-control" value="1" /></div>',
		'<div class="form-group"><input type="text" name="data[Puppy][0][forever_home]" class="forever_home form-control" /></div>',
		'<div class="form-group">'.$this->Html->tag('span', '', array('class'=>'glyphicon glyphicon-remove')).'</div>'
	);

	echo $this->Html->tableCells($cells, array('class'=>'puppy0')).'</table>';

	echo $this->Form->submit(
    		'Add All',
    		array('class'=>'btn btn-primary','style'=>'margin-top:10px')
    );

	echo $this->Form->end();
?>
</div>
<script>
$(document).ready(function() {
	var c = 1;
	$('#add_puppy_btn').click(function(){
		cloned = $('.puppy0').clone();

		cloned.removeClass('puppy0').addClass('puppy'+c);

		$("#add_puppy_table tbody").append(cloned);
		
		fields = ['color', 'is_male', 'is_available', 'forever_home'];

		$.each(fields, function(index, value){
			$('.puppy'+c+' input.'+value).attr('name', 'data[Puppy]['+c+']['+value+']');
			$('.puppy'+c+' input.'+value).removeClass('data[Puppy][0]['+value+']').addClass('data[Puppy]['+c+']['+value+']');
		});
		
		c++;
	});

	$('#add_puppy_table').on('click', '.glyphicon-remove', function() {
		$('.'+$(this).parents('tr').attr('class')).remove()
	});
});
</script>