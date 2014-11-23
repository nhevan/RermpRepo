<div class="users form">
<?
	$this->Js->get('#divisionSelector');
	$this->Js->event(
	    'change',
	    $this->Js->request(
	        array('action' => 'fetchDistricts', 'controller'=>'districts'),
	        array(
	        'async' => true, 
	        'update' => '#UserRefId',
	        'dataExpression' => true, 
            'method' => 'post', 
            'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true))
            )
	    )
	);
	
?>

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add District Level User'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		/*echo $this->Form->input('user_id',array('type'=>'hidden','value'=>1));
		echo $this->Form->input('creationTime',array('type'=>'hidden','value'=>date('Y-m-d H:m:s')));
		echo $this->Form->input('usertype_id',array('type'=>'hidden','value'=>3));*/
		?>
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
			<select name="data[User][ref_id]" id="UserRefId" required="required">
				<option >Select a District </option>
			</select>
		</div>
		
		<?

		//echo $this->Form->input('ref_id',array('label'=>'Choose District :','options'=>$divisionArray));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
