<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('isActive');
		echo $this->Form->input('union_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unions'), array('controller' => 'unions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedata'), array('controller' => 'baselinedata', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedatum'), array('controller' => 'baselinedata', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeemeta'), array('controller' => 'employeemeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeemetum'), array('controller' => 'employeemeta', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salarystatuses'), array('controller' => 'salarystatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salarystatus'), array('controller' => 'salarystatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
