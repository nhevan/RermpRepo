<div class="incomes form">
<?php echo $this->Form->create('Income'); ?>
	<fieldset>
		<legend><?php echo __('Add Income'); ?></legend>
	<?php
		echo $this->Form->input('amount');
		echo $this->Form->input('incometype_id');
		echo $this->Form->input('attendance_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Incomes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Incometypes'), array('controller' => 'incometypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incometype'), array('controller' => 'incometypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
