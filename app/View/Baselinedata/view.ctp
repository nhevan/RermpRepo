<div class="baselinedata view">
<h2><?php echo __('Baselinedatum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baseline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($baselinedatum['Baseline']['id'], array('controller' => 'baselines', 'action' => 'view', $baselinedatum['Baseline']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NGO'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['NGO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($baselinedatum['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $baselinedatum['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyHeadName'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['familyHeadName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyHeadOccupation'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['familyHeadOccupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyHeadEducation'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['familyHeadEducation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyHeadAge'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['familyHeadAge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyHeadDailyIncome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['familyHeadDailyIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyHeadLandOwned'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['familyHeadLandOwned']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalFamilyMember'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['totalFamilyMember']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaleFamilyMember'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['maleFamilyMember']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalChildren'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['totalChildren']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChildrenGoingToSchool'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['childrenGoingToSchool']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChildrenTask'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['childrenTask']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DoesDayLabour'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['doesDayLabour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HasBussiness'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['hasBussiness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HasAgriculture'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['hasAgriculture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsBegging'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['isBegging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HasOthersIncome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['hasOthersIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IncomeType'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['IncomeType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HaveOtherRegularIncomeSource'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['haveOtherRegularIncomeSource']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OwnRegularIncome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['ownRegularIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HusbandRegularIncome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['husbandRegularIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ParentsRegularincome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['parentsRegularincome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChildrensRegularIncome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['childrensRegularIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ResourcesLeftByHusband'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['resourcesLeftByHusband']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OthersRegularIncome'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['othersRegularIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LandQuantityOwned'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['landQuantityOwned']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LandHomestead'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['landHomestead']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LandCultivable'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['landCultivable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LandKhasInPossion'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['landKhasInPossion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hen'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['hen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chicken'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['chicken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duck'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['duck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swan'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['swan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cow'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['cow']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goat'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['goat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HomesteadGarden'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['homesteadGarden']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tree'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['tree']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pond'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['pond']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Others'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['others']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsVGDmember'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['isVGDmember']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsNGOmember'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['isNGOmember']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NameOfOrganization'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['nameOfOrganization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('YearsInvolvedInOrganization'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['yearsInvolvedInOrganization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanAmountFromNGOorGrameenBank'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['loanAmountFromNGOorGrameenBank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanAmount'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['loanAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanYear'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['loanYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanRepaid'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['loanRepaid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureFood'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureFood']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureChildrenSchool'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureChildrenSchool']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureClothes'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureClothes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureHaealth'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureHaealth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureTransportation'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureTransportation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureMobilephone'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureMobilephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureLoanRepayment'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureLoanRepayment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyExpenditureOthers'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureOthers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsInterestedInRuralRoadmaintenance'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['isInterestedInRuralRoadmaintenance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsInterestedAsAnNGOworkers'); ?></dt>
		<dd>
			<?php echo h($baselinedatum['Baselinedatum']['isInterestedAsAnNGOworkers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationshipstatuses'); ?></dt>
		<dd>
			<?php echo $this->Html->link($baselinedatum['Relationshipstatuses']['name'], array('controller' => 'relationshipstatuses', 'action' => 'view', $baselinedatum['Relationshipstatuses']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Baselinedatum'), array('action' => 'edit', $baselinedatum['Baselinedatum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Baselinedatum'), array('action' => 'delete', $baselinedatum['Baselinedatum']['id']), null, __('Are you sure you want to delete # %s?', $baselinedatum['Baselinedatum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedata'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedatum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('controller' => 'baselines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('controller' => 'baselines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
