<div class="accounts form">
<?
	$this->Js->get('#divisionSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchDistricts', 'controller'=>'districts'),
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
		<legend><?php echo __('Add District Account'); ?></legend>
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
		<div class="input select required">
			<label for="UserRefId">Choose District :</label>
			<select name="data[Account][refId]" id="AccountRefId" required="required">
				<option >Select a District </option>
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
