<div class="row-fluid">
	<div class="col-md-8">
		<h3>
			<?php 
			echo $litter['Mom']['name'].' x '.$litter['Dad']['name'].' - '.sizeof($litter['Puppy']).' puppies - '.date('n/j/Y', strtotime($litter['Litter']['dob']));?>
		</h3>
	</div>
	<div class="col-md-4 text-right">
		<h3 class="<?php echo $litter['Litter']['is_active']?'text-success':'text-muted'; ?>">
			<?php echo $litter['Litter']['is_active']?'Active':'Inactive'; ?>
		</h3>
	</div>
</div>
<div class="row-fluid">
	<?php
		$tcells = array();

		$female_icon = '<div class="text-center female_icon"><i class="fa fa-female fa-lg"></i></div>';
		$male_icon = '<div class="text-center male_icon"><i class="fa fa-male fa-lg"></i></div>';

		$x_icon = '<div class="text-center"><i class="fa fa-home fa-lg"></i></div>';

		foreach($litter['Puppy'] as $p){
			$tcells[] = array($p['color'], ($p['is_male']?$male_icon:$female_icon), ($p['is_available']?'':$x_icon), $p['forever_home'], '');
		}
	?>
	<table class="table table-bordered table-striped col-md-12">
		<?php echo $this->Html->tableHeaders(array('Color', 'Gender', 'Available', 'Forever Home', 'Actions'));
		echo $this->Html->tableCells($tcells);
		?> 
	</table>
</div>