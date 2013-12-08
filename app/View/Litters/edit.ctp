<div class="litters form">
<?php echo $this->Form->create('Litter');?>
	<fieldset>
		<legend><?php echo __('Edit Litter'); ?></legend>
	<?php
		echo $this->Form->input('litter_id');
		echo $this->Form->input('mom');
		echo $this->Form->input('dad');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Litter.litter_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Litter.litter_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Litters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Adults'), array('controller' => 'adults', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Litter Mom'), array('controller' => 'adults', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puppies'), array('controller' => 'puppies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puppy'), array('controller' => 'puppies', 'action' => 'add')); ?> </li>
	</ul>
</div>
