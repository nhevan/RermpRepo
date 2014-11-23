<div class="baselines form">
<?php echo $this->Form->create('Baseline'); ?>
	<fieldset>
		<legend><?php echo __('Add Baseline'); ?></legend>
	<?php
		echo $this->Form->input('fiscalYear');
		echo $this->Form->input('month');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Baselines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
