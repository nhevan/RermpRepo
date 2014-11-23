<div class="familymembers form">
<?php echo $this->Form->create('Familymember'); ?>
	<fieldset>
		<legend><?php echo __('Edit Familymember'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('sex');
		echo $this->Form->input('age');
		echo $this->Form->input('occupation');
		echo $this->Form->input('education');
		echo $this->Form->input('monthlyIncome');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('isUnderWeight');
		echo $this->Form->input('armMeasure');
		echo $this->Form->input('isMalnourished');
		echo $this->Form->input('isStunded');
		echo $this->Form->input('anyDisease');
		echo $this->Form->input('doctorVisited');
		echo $this->Form->input('remarks');
		echo $this->Form->input('relation');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('baseline_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Familymember.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Familymember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Familymembers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('controller' => 'baselines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('controller' => 'baselines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('controller' => 'femalemembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Femalemember'), array('controller' => 'femalemembers', 'action' => 'add')); ?> </li>
	</ul>
</div>
