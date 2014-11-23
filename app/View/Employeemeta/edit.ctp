<div class="employeemeta form">
<?php echo $this->Form->create('Employeemetum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employeemetum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('fatherHusband');
		echo $this->Form->input('NID');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('birthRegNo');
		echo $this->Form->input('DOB');
		echo $this->Form->input('village');
		echo $this->Form->input('loanAmount');
		echo $this->Form->input('loanPurpose');
		echo $this->Form->input('paidTillDate');
		echo $this->Form->input('savingsTillDate');
		echo $this->Form->input('savingTillDatePerBank');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employeemetum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Employeemetum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employeemeta'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
