<div class="row-fluid">
	<h3 class="col-md-12">
		<?php echo $litter['Mom']['name'].' x '.$litter['Dad']['name'].' '.date('n/j/Y g:i a', strtotime($litter['Litter']['dob']));?>
	</h3>
</div>
<div class="row-fluid">
	<?php
		$thead = array('Color', 'Male', 'Available', 'Forever Home', 'Actions');
		$tcells = array();
		foreach($litter['Puppy'] as $p){
			$tcells[] = array($p['color'], $p['is_male'], $p['is_available'], $p['forever_home'], '');
		}
	?>
	<table class="table table-bordered table-striped col-md-12">
		<?php echo $this->Html->tableHeaders(array('Color', 'Male', 'Available', 'Forever Home', 'Actions'));
		echo $this->Html->tableCells($tcells);
		?> 
	</table>
</div>