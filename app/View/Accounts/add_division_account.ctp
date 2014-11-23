<div class="accounts form">
<?
	$divisionArray = array();
	foreach($Divisions as $Division){
		$divisionArray[$Division['Division']['id']]=$Division['Division']['name'];
	}
?>

<?php echo $this->Form->create('Account'); ?>
	<fieldset>
		<legend><?php echo __('Add Division Account'); ?></legend>
	<?php
		echo $this->Form->input('refId',array('label'=>'Choose Division :','options'=>$divisionArray));
		echo $this->Form->input('accountNo');
		echo $this->Form->input('bankName');
		echo $this->Form->input('balance');

	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
