<div class="divisions form">
<?php echo $this->Form->create('Division'); ?>
	<fieldset>
		<legend><?php echo __('Add Division'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('createdby',array('type'=>'hidden','value'=>1));	//MUST CHANGE THIS VALUE
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
