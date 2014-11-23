<div class="employees view">
<h2><?php echo __('Employee Information'); ?></h2>
	<table class="table table-bordered genericTable" style="max-width:60%;">
		<tr>
			<td><span class="infoLabel"><?php echo __('Nick Name'); ?> </span>: </td>
			<td><?php echo h($employee['Employee']['name']); ?></td>
		</tr>

		<tr>
			<td><?php echo __('Full Name :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['name']; ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('Status :'); ?></td>
			<td><?php echo h($employee['Employee']['isActive']); ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('Union :'); ?></td>
			<td>
				<? echo $employee['Union']['name']; ?>
			</td>
		</tr>
		
		<tr>
			<td><?php echo __('Father/Husband Name :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['fatherHusband']; ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('NID No. :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['NID']; ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('Birth Registration No. :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['birthRegNo']; ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('Bate Of Birth :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['DOB']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Village Name :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['village']; ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('Loan Amount :' ); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['loanAmount']; ?> BDT</td>
		</tr>
		
		<tr>
			<td><?php echo __('Loan Purpose :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['loanPurpose']; ?></td>
		</tr>
		
		<tr>
			<td><?php echo __('Paid Till Today :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['paidTillDate']; ?> BDT</td>
		</tr>
		<tr>
			<td><?php echo __('Savings Till Today :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['savingsTillDate']; ?> BDT</td>
		</tr>
		
		<tr>
			<td><?php echo __('Savings Till Today Per Bank :'); ?></td>
			<td><?php echo $employee['Employeemetum'][0]['savingTillDatePerBank']; ?> BDT</td>
		</tr>
		
	</table>
</div>

<div class="related">
	<h3><?php echo __('Related Salarystatuses'); ?></h3>
	<?php if (!empty($employee['Salarystatus'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered genericTable" style="width:50%;">
	<tr>
		<th style="text-align:center;"><?php echo __('Total Cash'); ?></th>
		<th style="text-align:center;"><?php echo __('Total Saving'); ?></th>
	</tr>
	<?php foreach ($employee['Salarystatus'] as $salarystatus): ?>
		<tr>
			<td style="text-align:center;"><?php echo $salarystatus['cash']; ?> BDT</td>
			<td style="text-align:center;"><?php echo $salarystatus['saving']; ?> BDT</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($accountinfo)): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered genericTable">
	<tr>
		<th><?php echo __('AccountNo'); ?></th>
		<th><?php echo __('BankName'); ?></th>
		<th><?php echo __('Balance'); ?></th>
	</tr>

		<tr>
			<td style="text-align:left";><?php echo $accountinfo[0]['Account']['accountNo']; ?></td>
			<td><?php echo $accountinfo[0]['Account']['bankName']; ?></td>
			<td>
				<?php echo $accountinfo[0]['Account']['balance']; ?> BDT
				
				<? echo $this->HTML->link('View Detail',array('controller'=>'accounts','action'=>'detail',$accountinfo[0]['Account']['id']),array('class'=>'btn btn-info'));  ?>
			</td>
		</tr>

	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Attendances Record'); ?></h3>
	<?php if (!empty($employee['Attendance'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Recorded On'); ?></th>
		<th><?php echo __('Working Year'); ?></th>
		<th><?php echo __('Working Month'); ?></th>
		<th><?php echo __('Days Present'); ?></th>
	
	</tr>
	<?php foreach ($employee['Attendance'] as $attendance): ?>
		<tr>
			<td><?php echo $attendance['datetime']; ?></td>
			<td><?php echo $attendance['year']; ?></td>
			<td><?php echo $attendance['month']; ?></td>
			<td><?php echo $attendance['days_present']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Add New Attendance for this Employee'), array('controller' => 'attendances', 'action' => 'assign',$employee['Employee']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Baselinedata'); ?></h3>
	<?php if (!empty($employee['Baselinedatum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Baseline Id'); ?></th>
		<th><?php echo __('NGO'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Education'); ?></th>
		<th><?php echo __('Occupation'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('FamilyHeadName'); ?></th>
		<th><?php echo __('FamilyHeadOccupation'); ?></th>
		<th><?php echo __('FamilyHeadEducation'); ?></th>
		<th><?php echo __('FamilyHeadAge'); ?></th>
		<th><?php echo __('FamilyHeadDailyIncome'); ?></th>
		<th><?php echo __('FamilyHeadLandOwned'); ?></th>
		<th><?php echo __('TotalFamilyMember'); ?></th>
		<th><?php echo __('MaleFamilyMember'); ?></th>
		<th><?php echo __('TotalChildren'); ?></th>
		<th><?php echo __('ChildrenGoingToSchool'); ?></th>
		<th><?php echo __('ChildrenTask'); ?></th>
		<th><?php echo __('DoesDayLabour'); ?></th>
		<th><?php echo __('HasBussiness'); ?></th>
		<th><?php echo __('HasAgriculture'); ?></th>
		<th><?php echo __('IsBegging'); ?></th>
		<th><?php echo __('HasOthersIncome'); ?></th>
		<th><?php echo __('IncomeType'); ?></th>
		<th><?php echo __('HaveOtherRegularIncomeSource'); ?></th>
		<th><?php echo __('OwnRegularIncome'); ?></th>
		<th><?php echo __('HusbandRegularIncome'); ?></th>
		<th><?php echo __('ParentsRegularincome'); ?></th>
		<th><?php echo __('ChildrensRegularIncome'); ?></th>
		<th><?php echo __('ResourcesLeftByHusband'); ?></th>
		<th><?php echo __('OthersRegularIncome'); ?></th>
		<th><?php echo __('LandQuantityOwned'); ?></th>
		<th><?php echo __('LandHomestead'); ?></th>
		<th><?php echo __('LandCultivable'); ?></th>
		<th><?php echo __('LandKhasInPossion'); ?></th>
		<th><?php echo __('Hen'); ?></th>
		<th><?php echo __('Chicken'); ?></th>
		<th><?php echo __('Duck'); ?></th>
		<th><?php echo __('Swan'); ?></th>
		<th><?php echo __('Cow'); ?></th>
		<th><?php echo __('Goat'); ?></th>
		<th><?php echo __('HomesteadGarden'); ?></th>
		<th><?php echo __('Tree'); ?></th>
		<th><?php echo __('Pond'); ?></th>
		<th><?php echo __('Others'); ?></th>
		<th><?php echo __('IsVGDmember'); ?></th>
		<th><?php echo __('IsNGOmember'); ?></th>
		<th><?php echo __('NameOfOrganization'); ?></th>
		<th><?php echo __('YearsInvolvedInOrganization'); ?></th>
		<th><?php echo __('LoanAmountFromNGOorGrameenBank'); ?></th>
		<th><?php echo __('LoanAmount'); ?></th>
		<th><?php echo __('LoanYear'); ?></th>
		<th><?php echo __('LoanRepaid'); ?></th>
		<th><?php echo __('MonthlyExpenditureFood'); ?></th>
		<th><?php echo __('MonthlyExpenditureChildrenSchool'); ?></th>
		<th><?php echo __('MonthlyExpenditureClothes'); ?></th>
		<th><?php echo __('MonthlyExpenditureHaealth'); ?></th>
		<th><?php echo __('MonthlyExpenditureTransportation'); ?></th>
		<th><?php echo __('MonthlyExpenditureMobilephone'); ?></th>
		<th><?php echo __('MonthlyExpenditureLoanRepayment'); ?></th>
		<th><?php echo __('MonthlyExpenditureOthers'); ?></th>
		<th><?php echo __('IsInterestedInRuralRoadmaintenance'); ?></th>
		<th><?php echo __('IsInterestedAsAnNGOworkers'); ?></th>
		<th><?php echo __('Relationshipstatuses Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Baselinedatum'] as $baselinedatum): ?>
		<tr>
			<td><?php echo $baselinedatum['id']; ?></td>
			<td><?php echo $baselinedatum['baseline_id']; ?></td>
			<td><?php echo $baselinedatum['NGO']; ?></td>
			<td><?php echo $baselinedatum['employee_id']; ?></td>
			<td><?php echo $baselinedatum['education']; ?></td>
			<td><?php echo $baselinedatum['occupation']; ?></td>
			<td><?php echo $baselinedatum['age']; ?></td>
			<td><?php echo $baselinedatum['familyHeadName']; ?></td>
			<td><?php echo $baselinedatum['familyHeadOccupation']; ?></td>
			<td><?php echo $baselinedatum['familyHeadEducation']; ?></td>
			<td><?php echo $baselinedatum['familyHeadAge']; ?></td>
			<td><?php echo $baselinedatum['familyHeadDailyIncome']; ?></td>
			<td><?php echo $baselinedatum['familyHeadLandOwned']; ?></td>
			<td><?php echo $baselinedatum['totalFamilyMember']; ?></td>
			<td><?php echo $baselinedatum['maleFamilyMember']; ?></td>
			<td><?php echo $baselinedatum['totalChildren']; ?></td>
			<td><?php echo $baselinedatum['childrenGoingToSchool']; ?></td>
			<td><?php echo $baselinedatum['childrenTask']; ?></td>
			<td><?php echo $baselinedatum['doesDayLabour']; ?></td>
			<td><?php echo $baselinedatum['hasBussiness']; ?></td>
			<td><?php echo $baselinedatum['hasAgriculture']; ?></td>
			<td><?php echo $baselinedatum['isBegging']; ?></td>
			<td><?php echo $baselinedatum['hasOthersIncome']; ?></td>
			<td><?php echo $baselinedatum['IncomeType']; ?></td>
			<td><?php echo $baselinedatum['haveOtherRegularIncomeSource']; ?></td>
			<td><?php echo $baselinedatum['ownRegularIncome']; ?></td>
			<td><?php echo $baselinedatum['husbandRegularIncome']; ?></td>
			<td><?php echo $baselinedatum['parentsRegularincome']; ?></td>
			<td><?php echo $baselinedatum['childrensRegularIncome']; ?></td>
			<td><?php echo $baselinedatum['resourcesLeftByHusband']; ?></td>
			<td><?php echo $baselinedatum['othersRegularIncome']; ?></td>
			<td><?php echo $baselinedatum['landQuantityOwned']; ?></td>
			<td><?php echo $baselinedatum['landHomestead']; ?></td>
			<td><?php echo $baselinedatum['landCultivable']; ?></td>
			<td><?php echo $baselinedatum['landKhasInPossion']; ?></td>
			<td><?php echo $baselinedatum['hen']; ?></td>
			<td><?php echo $baselinedatum['chicken']; ?></td>
			<td><?php echo $baselinedatum['duck']; ?></td>
			<td><?php echo $baselinedatum['swan']; ?></td>
			<td><?php echo $baselinedatum['cow']; ?></td>
			<td><?php echo $baselinedatum['goat']; ?></td>
			<td><?php echo $baselinedatum['homesteadGarden']; ?></td>
			<td><?php echo $baselinedatum['tree']; ?></td>
			<td><?php echo $baselinedatum['pond']; ?></td>
			<td><?php echo $baselinedatum['others']; ?></td>
			<td><?php echo $baselinedatum['isVGDmember']; ?></td>
			<td><?php echo $baselinedatum['isNGOmember']; ?></td>
			<td><?php echo $baselinedatum['nameOfOrganization']; ?></td>
			<td><?php echo $baselinedatum['yearsInvolvedInOrganization']; ?></td>
			<td><?php echo $baselinedatum['loanAmountFromNGOorGrameenBank']; ?></td>
			<td><?php echo $baselinedatum['loanAmount']; ?></td>
			<td><?php echo $baselinedatum['loanYear']; ?></td>
			<td><?php echo $baselinedatum['loanRepaid']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureFood']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureChildrenSchool']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureClothes']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureHaealth']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureTransportation']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureMobilephone']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureLoanRepayment']; ?></td>
			<td><?php echo $baselinedatum['monthlyExpenditureOthers']; ?></td>
			<td><?php echo $baselinedatum['isInterestedInRuralRoadmaintenance']; ?></td>
			<td><?php echo $baselinedatum['isInterestedAsAnNGOworkers']; ?></td>
			<td><?php echo $baselinedatum['relationshipstatuses_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'baselinedata', 'action' => 'view', $baselinedatum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'baselinedata', 'action' => 'edit', $baselinedatum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'baselinedata', 'action' => 'delete', $baselinedatum['id']), null, __('Are you sure you want to delete # %s?', $baselinedatum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Baselinedatum'), array('controller' => 'baselinedata', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

