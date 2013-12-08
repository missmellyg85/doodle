<?php 

	$first = true;
	$count = 1;
	$size = sizeof($pictures);
	foreach($pictures as $pic): 
		
		if($first): ?>
			<div class="row-fluid first">
				<div class="span9 puppy">
					<div class="row-fluid">
						<img src="<?php echo $this->webroot.'img/puppies/'.$puppy['litter_id'].'/'.$pic['PuppiesPictures']['filename'].'.jpg'; ?>" />
					</div>
					<div class="row-fluid age">
						<p><?php echo $pic['PuppiesPictures']['age']; ?></p>
					</div>
				</div>
				<div class="span3 puppy">
					<div class="corner bottom"><a id="<?php echo $puppy['litter_id'].'_'.$puppy['color']; ?>"></a>
						<h3><?php echo $puppy['color'];?></h3>
						<h4><?php if($puppy['is_available']) { echo "Available"; } else { echo "Sold"; } ?></h4>
						<h4><?php 
						if($puppy['forever_home'] != null):
						echo ($puppy['is_male'])?"His":"Her"; ?> forever home will be in 
							<?php echo $puppy['forever_home']; ?>!
						<?php endif; ?></h4>
					</div>
				</div>
			</div>
		
		<?php
		
		$first = false;
		
		else: 
			if($count%2 == 0): ?>
			<div class="row-fluid">
			<?php endif ?>
				<div class="span6 puppy">
					<div class="row-fluid">
						<img src="<?php echo $this->webroot.'img/puppies/'.$puppy['litter_id'].'/'.$pic['PuppiesPictures']['filename'].'.jpg'; ?>" />
					</div>
					<div class="row-fluid age">
						<p><?php echo $pic['PuppiesPictures']['age']; ?></p>
					</div>
				</div>
		<?php if(($count%2 == 0) && ($count == $size)): ?>
				<div class="span6 puppy"></div>
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