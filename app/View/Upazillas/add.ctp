<div class="upazillas form">
<?
	$this->Js->get('#divisionSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchDistricts', 'controller'=>'districts'),
	        array(
	        'async' => true, 
	        'update' => '#UpazillaDistrictId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
	
?>
<?php echo $this->Form->create('Upazilla'); ?>
	<fieldset>
		<legend><?php echo __('Add Upazilla'); ?></legend>
	<?php
		echo $this->Form->input('lgedRefId');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
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
			<label for="UpazillaDistrictId">Choose District :</label>
			<select name="data[Upazilla][district_id]" id="UpazillaDistrictId">
				<option>Choose a District</option>
			</select>
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
