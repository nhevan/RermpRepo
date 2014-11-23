<div class="attendances form">
<?php echo $this->Form->create('Attendance'); ?>
	<fieldset>
		<legend><?php echo __('Add Attendance'); ?></legend>
	<?php
		$years = array('2014'=>2014,'2015'=>2015,'2016'=>2016,'2017'=>2017,'2018'=>2018,'2019'=>2019,'2020'=>2020);
		echo $this->Form->input('year',array('options'=>$years));
		$months = array(
			1=>'January',
			2=>'February',
			3=>'March',
			4=>'April',
			5=>'May',
			6=>'June',
			7=>'July',
			8=>'August',
			9=>'September',
			10=>'October',
			11=>'November',
			12=>'December');
		echo $this->Form->input('month',array('options'=>$months));
		echo $this->Form->input('days_present');

	?>
	</fieldset>
<?php echo $this->Form->Submit('Submit',array('class'=>'btn btn-primary')); 
		echo $this->Form->end();
?>
</div>
