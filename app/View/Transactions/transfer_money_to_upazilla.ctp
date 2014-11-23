<div class="transactions form">
<?
	$this->Js->get('#divisionSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchDistricts', 'controller'=>'districts'),
	        array(
	        'async' => true, 
	        'update' => '#DistrictId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);	
	
	$this->Js->get('#DistrictId');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchUpazillasWithAccounts', 'controller'=>'upazillas'),
	        array(
	        'async' => true, 
	        'update' => '#UpazillaAccountId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);	
?>

<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Transfer Money To Upazilla Account'); ?></legend>
		
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
	//	echo $this->Form->input('account_id',array('options'=>$accountList,'label'=>'Select Division Account:'));
	?>
	<div>
		<label>Choose Division :</label>
		<select id="divisionSelector" name="Division">
			<option >Select a Division</option>
			<?
				foreach($divisions as $Division){
					$tmpId = $Division['Division']['id'];
					$tmpName = $Division['Division']['name'];
					echo "<option value='$tmpId'>$tmpName</option>";
				}
			?>
		</select>
	</div>
	<div class="input select">
		<label for="DistrictId">Choose District :</label>
		<select name="District" id="DistrictId">
			<option>Choose a District</option>
		</select>
	</div>
	<div class="input select">
		<label for="UpazillaAccountId">Choose Upazilla :</label>
		<select name="data[Transaction][account_id]" id="UpazillaAccountId">
			<option>Choose a Upazilla</option>
		</select>
	</div>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
