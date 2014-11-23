<div class="relationshipstatuses form">
<?php echo $this->Form->create('Relationshipstatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Relationshipstatus'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('controller' => 'femalemembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Femalemember'), array('controller' => 'femalemembers', 'action' => 'add')); ?> </li>
	</ul>
</div>
