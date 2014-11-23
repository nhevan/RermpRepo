<div class="baselinedata form">
<?php echo $this->Form->create('Baselinedatum'); ?>
	<fieldset>
		<legend><?php echo __('Add Baselinedatum'); ?></legend>
	<?php
		echo $this->Form->input('baseline_id');
		echo $this->Form->input('NGO');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('education');
		echo $this->Form->input('occupation');
		echo $this->Form->input('age');
		echo $this->Form->input('familyHeadName');
		echo $this->Form->input('familyHeadOccupation');
		echo $this->Form->input('familyHeadEducation');
		echo $this->Form->input('familyHeadAge');
		echo $this->Form->input('familyHeadDailyIncome');
		echo $this->Form->input('familyHeadLandOwned');
		echo $this->Form->input('totalFamilyMember');
		echo $this->Form->input('maleFamilyMember');
		echo $this->Form->input('totalChildren');
		echo $this->Form->input('childrenGoingToSchool');
		echo $this->Form->input('childrenTask');
		echo $this->Form->input('doesDayLabour');
		echo $this->Form->input('hasBussiness');
		echo $this->Form->input('hasAgriculture');
		echo $this->Form->input('isBegging');
		echo $this->Form->input('hasOthersIncome');
		echo $this->Form->input('IncomeType');
		echo $this->Form->input('haveOtherRegularIncomeSource');
		echo $this->Form->input('ownRegularIncome');
		echo $this->Form->input('husbandRegularIncome');
		echo $this->Form->input('parentsRegularincome');
		echo $this->Form->input('childrensRegularIncome');
		echo $this->Form->input('resourcesLeftByHusband');
		echo $this->Form->input('othersRegularIncome');
		echo $this->Form->input('landQuantityOwned');
		echo $this->Form->input('landHomestead');
		echo $this->Form->input('landCultivable');
		echo $this->Form->input('landKhasInPossion');
		echo $this->Form->input('hen');
		echo $this->Form->input('chicken');
		echo $this->Form->input('duck');
		echo $this->Form->input('swan');
		echo $this->Form->input('cow');
		echo $this->Form->input('goat');
		echo $this->Form->input('homesteadGarden');
		echo $this->Form->input('tree');
		echo $this->Form->input('pond');
		echo $this->Form->input('others');
		echo $this->Form->input('isVGDmember');
		echo $this->Form->input('isNGOmember');
		echo $this->Form->input('nameOfOrganization');
		echo $this->Form->input('yearsInvolvedInOrganization');
		echo $this->Form->input('loanAmountFromNGOorGrameenBank');
		echo $this->Form->input('loanAmount');
		echo $this->Form->input('loanYear');
		echo $this->Form->input('loanRepaid');
		echo $this->Form->input('monthlyExpenditureFood');
		echo $this->Form->input('monthlyExpenditureChildrenSchool');
		echo $this->Form->input('monthlyExpenditureClothes');
		echo $this->Form->input('monthlyExpenditureHaealth');
		echo $this->Form->input('monthlyExpenditureTransportation');
		echo $this->Form->input('monthlyExpenditureMobilephone');
		echo $this->Form->input('monthlyExpenditureLoanRepayment');
		echo $this->Form->input('monthlyExpenditureOthers');
		echo $this->Form->input('isInterestedInRuralRoadmaintenance');
		echo $this->Form->input('isInterestedAsAnNGOworkers');
		echo $this->Form->input('relationshipstatuses_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Baselinedata'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('controller' => 'baselines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('controller' => 'baselines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
