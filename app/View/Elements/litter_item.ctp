<div class="row-fluid"><h3 class="span12"><?php echo $litter['Mom']['name']." x ".$litter['Dad']['name']; ?></h3></div>
	<div class="row-fluid">

		<div class="row-fluid" id="weights_container" <?php echo (sizeof($litter['Puppy'][0]['Weights'])>7)?'style="overflow-x:scroll;"':"" ?>>
			<div id="weights_scroller">
				<table class="table_border">
					<?php
						$first = true;
						$m_pics = false;
						$f_pics = false;
						foreach ($litter['Puppy'] as $puppy) {
							
							if(!empty($pictures[$puppy['puppy_id']]) && $puppy['is_male']) { $m_pics = true; } 
							elseif ((!empty($pictures[$puppy['puppy_id']]) && !$puppy['is_male'])) { $f_pics = true; }

							if($first) { $tr_h = "<tr><th>Color</th>"; };

							$tr_d = "<tr><td><a href='#".$puppy['litter_id'].'_'.$puppy['color']."'>".$puppy['color']."</a></td>";
							
							foreach ($puppy['Weights'] as $weight) {
								if($first) { 
									$tr_h.="<th>";
									if($weight['Weight']['date_text'] == ''){
										$tr_h.=date('n/j',strtotime($weight['Weight']['dateadded'])); 
									}else{
										$tmp = explode('<br/>', $weight['Weight']['date_text']);
										$tr_h.=(sizeof($tmp)==2)?$tmp[1]:$tmp[0]; 
									}
									$tr_h.="</th>";
								}
								
								$tr_d.="<td>";
								
								if($weight['Weight']['pounds'] != 0){
									$tr_d.=$weight['Weight']['pounds']." lbs ";
								}
								$tr_d.=$weight['Weight']['ounces']." oz</td>";
							}

							if($first) { 
								$tr_h.="</tr>";
								echo $tr_h;
								$first = false;
							};
							$tr_d.="</tr>";
							echo $tr_d;
						}
					?>
				</table>
			</div>
		</div>
		<?php if($m_pics): ?>
			<div class='row-fluid'><div class='span12'><h4>Males</h4></div></div>
			<?php 
				$count = 0;
				$size = sizeof($litter['Males']);
				foreach($litter['Males'] as $puppy): ?>
					<?php if ($count%2 == 0) { echo "<div class='row-fluid'>";}
					
					echo $this->element('puppy_picture', array('puppy'=>$puppy, 'pictures'=>$pictures[$puppy['puppy_id']]));
					?>
					
					<?php if ((($count == $size-1) && ($size%2 == 1)) || ($count%2 == 1)) { 
						echo "</div>";
					} 
					$count++;
					?>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if($f_pics): ?>
			<div class='row-fluid'><div class='span12'><h4>Females</h4></div></div>
			<?php 
				$count = 0;
				$size = sizeof($litter['Females']);
				foreach($litter['Females'] as $puppy): ?>
					<?php if ($count%2 == 0) { echo "<div class='row-fluid'>";}

					echo $this->element('puppy_picture', array('puppy'=>$puppy, 'pictures'=>$pictures[$puppy['puppy_id']]));
					?>
					
					<?php if ((($count == $size-1) && ($size%2 == 1)) || ($count%2 == 1)) { 
						echo "</div>";
					} 
					$count++;
					?>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>