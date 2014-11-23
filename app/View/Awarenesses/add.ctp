<div class="awarenesses form">
<?php echo $this->Form->create('Awareness'); ?>
	<fieldset>
		<legend><?php echo __('Add Awareness'); ?></legend>
	<?php
		echo $this->Form->input('childrenSchooling');
		echo $this->Form->input('hospitalLocation');
		echo $this->Form->input('hospitalFee');
		echo $this->Form->input('oreSalinePreparation');
		echo $this->Form->input('washingHands');
		echo $this->Form->input('ideaOfNutritiona;Food');
		echo $this->Form->input('poultryDiseaseRelatedService');
		echo $this->Form->input('commonDisease');
		echo $this->Form->input('LocationLocalNGOoffice');
		echo $this->Form->input('CanReadWrite');
		echo $this->Form->input('awareOfSamallBussiness');
		echo $this->Form->input('KnowledgeOfFeeForMoneyTransfer');
		echo $this->Form->input('baselinedata_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Awarenesses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
