<div class="salarystatuses form">
<?php echo $this->Form->create('Salarystatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Salarystatus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cash');
		echo $this->Form->input('saving');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('updated_on');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Salarystatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Salarystatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Salarystatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
