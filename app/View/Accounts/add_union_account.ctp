<div class="accounts form">
<?
	$this->Js->get('#divisionSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchDistricts', 'controller'=>'districts'),
	        array(
	        'async' => true, 
	        'update' => '#districtSelector',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
	
	$this->Js->get('#districtSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchUpazillas', 'controller'=>'upazillas'),
	        array(
	        'async' => true, 
	        'update' => '#upazillaSelector',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
	
	$this->Js->get('#upazillaSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchUnions', 'controller'=>'unions'),
	        array(
	        'async' => true, 
	        'update' => '#AccountRefId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
?>


<?php echo $this->Form->create('Account'); ?>
	<fieldset>
		<legend><?php echo __('Add Union Account'); ?></legend>
		<div>
			<label>Choose Division :</label>
			<select id="divisionSelector" name="Division">
				<option >Select a Division</option>
				<?
					foreach($Divisions as $Division){
						$tmpId = $Division['Division']['id'];
						$tmpName = $Division['Division']['name'];
						echo "<option value='$tmpId'>$tmpName</option>";
					}
				?>
			</select>
		</div>
		
		<div>
			<label>Choose District :</label>
			<select id="districtSelector" name="District">
				<option >Select a District</option>
			</select>
		</div>
		
		<div>
			<label>Choose Upazilla :</label>
			<select id="upazillaSelector" name="Upazilla">
				<option >Select a Upazilla</option>
			</select>
		</div>
		
		<div class="input select required">
			<label for="UserRefId">Choose Union :</label>
			<select name="data[Account][refId]" id="AccountRefId" required="required">
				<option >Select a Union </option>
			</select>
		</div>

	<?php
		//echo $this->Form->input('refId',array('label'=>'Choose Division :','options'=>$divisionArray));
		echo $this->Form->input('accountNo',array('required'=>'true'));
		echo $this->Form->input('bankName',array('required'=>'true'));
		echo $this->Form->input('balance',array('required'=>'true'));

	?>
	</fieldset>
<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
