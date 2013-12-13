<?php 
	$first = true;
	$count = 1;
	$size = sizeof($pictures);
	foreach($pictures as $pic): 
		
		if($first): ?>
			<div class="row first">
				<div class="col-md-9 puppy">
					<div class="row">
						<img src="<?php echo $this->webroot.'/img/puppies/'.$puppy['litter_id'].'/'.$pic['PuppiesPictures']['filename'].'.jpg'; ?>" />
					</div>
					<div class="row age">
						<p><?php echo $pic['PuppiesPictures']['age']; ?></p>
					</div>
				</div>
				<div class="col-md-3 puppy">
					<div class="corner bottom"><a id="<?php echo $puppy['litter_id'].'_'.$puppy['color']; ?>"></a>
						<h3><?php echo $puppy['color'];?></h3>
						<h4><?php if($puppy['isavailable']) { echo "Available"; } else { echo "Sold"; } ?></h4>
						<h4><?php echo date('g:i a', strtotime($puppy['birthtime'])); ?></h4>
					</div>
				</div>
			</div>
		
		<?php
		
		$first = false;
		
		else: 
			if($count%2 == 0): ?>
			<div class="row">
			<?php endif ?>
				<div class="col-md-6 puppy">
					<div class="row">
						<img src="<?php echo $this->webroot.'/img/puppies/'.$puppy['litter_id'].'/'.$pic['PuppiesPictures']['filename'].'.jpg'; ?>" />
					</div>
					<div class="row age">
						<p><?php echo $pic['PuppiesPictures']['age']; ?></p>
					</div>
				</div>
		<?php if(($count%2 == 0) && ($count == $size)): ?>
				<div class="col-md-6 puppy"></div>
			</div>
		<?php 
			endif; 
			if(($count%2 == 1)): ?>
			
				</div>

			
		<?php endif;
		endif; 
		$count++;
		?>	
<?php endforeach; ?>