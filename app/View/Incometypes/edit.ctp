<div class="incometypes form">
<?php echo $this->Form->create('Incometype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Incometype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Incometype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Incometype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Incometypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
