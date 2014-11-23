<div class="unions form">
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
	        'update' => '#UnionUpazillaId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
	
?>
<?php echo $this->Form->create('Union'); ?>
	<fieldset>
		<legend><?php echo __('Add Union'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('decsription');
		//echo $this->Form->input('createdBy',array('type'=>'hidden','value'=>1)); //MUST CHANGE THIS ACCORDING TO LOGGED IN USER ID
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
		<select id="districtSelector" name="District">
			<option>Select a District</option>
		</select>
	</div>
		<div class="input select">
			<label for="UnionUpazillaId">Choose Upazilla :</label>
			<select name="data[Union][upazilla_id]" id="UnionUpazillaId">
				<option>Select a Upazilla</option>
			</select>
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>