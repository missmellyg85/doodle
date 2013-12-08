<div class="litters view">
<h2><?php  echo __('Litter');?></h2>
	<dl>
		<dt><?php echo __('Litter Id'); ?></dt>
		<dd>
			<?php echo h($litter['Litter']['litter_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Litter Mom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($litter['litter_mom']['name'], array('controller' => 'adults', 'action' => 'view', $litter['litter_mom']['adult_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Litter Dad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($litter['litter_dad']['name'], array('controller' => 'adults', 'action' => 'view', $litter['litter_dad']['adult_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isactive'); ?></dt>
		<dd>
			<?php echo h($litter['Litter']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Litter'), array('action' => 'edit', $litter['Litter']['litter_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Litter'), array('action' => 'delete', $litter['Litter']['litter_id']), null, __('Are you sure you want to delete # %s?', $litter['Litter']['litter_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Litters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Litter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adults'), array('controller' => 'adults', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Litter Mom'), array('controller' => 'adults', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puppies'), array('controller' => 'puppies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puppy'), array('controller' => 'puppies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Puppies');?></h3>
	<?php if (!empty($litter['Puppy'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Puppy Id'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Litter Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($litter['Puppy'] as $puppy): ?>
		<tr>
			<td><?php echo $puppy['puppy_id'];?></td>
			<td><?php echo $puppy['color'];?></td>
			<td><?php echo $puppy['litter_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'puppies', 'action' => 'view', $puppy['puppy_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'puppies', 'action' => 'edit', $puppy['puppy_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'puppies', 'action' => 'delete', $puppy['puppy_id']), null, __('Are you sure you want to delete # %s?', $puppy['puppy_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Puppy'), array('controller' => 'puppies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
