<div class="femalemembers form">
<?php echo $this->Form->create('Femalemember'); ?>
	<fieldset>
		<legend><?php echo __('Edit Femalemember'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('isMarried');
		echo $this->Form->input('isPregnent');
		echo $this->Form->input('isLactating');
		echo $this->Form->input('liveWithHusband');
		echo $this->Form->input('familymember_id');
		echo $this->Form->input('relationshipstatus_id');
		echo $this->Form->input('baselinedata_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Femalemember.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Femalemember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Familymembers'), array('controller' => 'familymembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familymember'), array('controller' => 'familymembers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatus'), array('controller' => 'relationshipstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
