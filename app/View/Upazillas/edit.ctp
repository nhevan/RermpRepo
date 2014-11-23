<div class="upazillas form">
<?php echo $this->Form->create('Upazilla'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upazilla'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lgedRefId');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('user_id');
		echo $this->Form->input('district_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Upazilla.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Upazilla.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Upazillas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unions'), array('controller' => 'unions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
	</ul>
</div>
