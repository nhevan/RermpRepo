<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Transfer Money To Division'); ?></legend>
		
		<?
			$accountList = array();
			foreach($accounts as $account){
				foreach($divisions as $division){
					if((int)$division['Division']['id'] == $account['Account']['refId']) $DivisionName = $division['Division']['name'];
				}
				$accountList[$account['Account']['id']]	= $DivisionName;
			}
		?>
		<? //  var_dump($divisions); ?>
		
	<?php
	
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
		$years = array('2014'=>2014,'2015'=>2015,'2016'=>2016,'2017'=>2017,'2018'=>2018,'2019'=>2019,'2020'=>2020);
	
		//echo $this->Form->input('datetime');
		echo $this->Form->input('year',array('options'=>$years));
		echo $this->Form->input('month',array('options'=>$months));
		echo $this->Form->input('reference');
		echo $this->Form->input('amount',array('required'=>'true'));
		//echo $this->Form->input('user_id');
		//echo $this->Form->input('account_from');
		echo $this->Form->input('account_id',array('options'=>$accountList,'label'=>'Select Division Account:'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
