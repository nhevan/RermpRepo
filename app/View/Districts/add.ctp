<div class="districts form">
<?php echo $this->Form->create('District'); ?>
	<fieldset>
		<legend><?php echo __('Add District'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('user_id',array('type'=>'hidden','value'=>1)); //MUST CHANGE THIS VALUE
		echo $this->Form->input('division_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>