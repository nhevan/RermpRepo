<div class="employees form">
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
	        'update' => '#EmployeeUnionId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
	$action = $this->Js->get('#EmpForm')->effect('fadeIn');
	$this->Js->get('#EmployeeUnionId');
	$this->Js->event('change',$action);

?>
<?php echo $this->Form->create('Employee', array(
    'enctype' => 'multipart/form-data'
)); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
		
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
			<label for="EmployeeUnionId">Union</label>
			<select name="data[Employee][union_id]" id="EmployeeUnionId">
				<option >Select a Union </option>
			</select>
		</div>
		<div id="EmpForm" style="display:nonex;">
	<?php
		//echo $this->Form->input('union_id');
		echo $this->Form->input('name',array('label'=>'Nick Name : '));
		?>
		<span>Upload a profile Picture :</span>
		<? echo $this->Form->file('image',array('required'=>'true')); ?>
		<br/><br/>
		<?
		echo $this->Form->input('Employeemetum.name',array('label'=>'Full Name :','required'=>'true'));
		echo $this->Form->input('Employeemetum.fatherHusband',array('label'=>'Father or Husband Name :'));
		echo $this->Form->input('Employeemetum.NID',array('required'=>'true'));
		//echo $this->Form->input('employee_id');
		echo $this->Form->input('Employeemetum.birthRegNo',array('label'=>'Birth Registration No.:','rows'=>1,'type'=>'text'));
		echo $this->Form->input('Employeemetum.DOB',array(
								'label' => 'Date of Birth :',
								'minYear' => date('Y') - 70,
    							'maxYear' => date('Y') - 18,));
		echo $this->Form->input('Employeemetum.village',array('required'=>'true'));
		echo $this->Form->input('Employeemetum.loanAmount');
		echo $this->Form->input('Employeemetum.loanPurpose');
		echo $this->Form->input('Employeemetum.paidTillDate');
		echo $this->Form->input('Employeemetum.savingsTillDate');
		echo $this->Form->input('Employeemetum.savingTillDatePerBank');
	?>
		<legend><?php echo __('Account Information'); ?></legend>
	<?	
		echo $this->Form->input('Account.accountNo',array('required'=>'true'));
		echo $this->Form->input('Account.bankName',array('required'=>'true'));
	?>
		</div><!-- EmpForm ends -->
	</fieldset>
<?php 
	echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); 
	echo $this->Form->end();
?>
</div>
