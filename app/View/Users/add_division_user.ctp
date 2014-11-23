<div class="users form">
<?
	$divisionArray = array();
	foreach($Divisions as $Division){
		$divisionArray[$Division['Division']['id']]=$Division['Division']['name'];
	}
?>

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add Division Level User'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		/*echo $this->Form->input('user_id',array('type'=>'hidden','value'=>1));
		echo $this->Form->input('creationTime',array('type'=>'hidden','value'=>date('Y-m-d H:m:s')));
		echo $this->Form->input('usertype_id',array('type'=>'hidden','value'=>4));*/
		echo $this->Form->input('ref_id',array('label'=>'Choose Division :','options'=>$divisionArray));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>

