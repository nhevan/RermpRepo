<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsActive'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['isActive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Union'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Union']['name'], array('controller' => 'unions', 'action' => 'view', $employee['Union']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unions'), array('controller' => 'unions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedata'), array('controller' => 'baselinedata', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedatum'), array('controller' => 'baselinedata', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeemeta'), array('controller' => 'employeemeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeemetum'), array('controller' => 'employeemeta', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salarystatuses'), array('controller' => 'salarystatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salarystatus'), array('controller' => 'salarystatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($employee['Account'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('AccountNo'); ?></th>
		<th><?php echo __('BankName'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Union Id'); ?></th>
		<th><?php echo __('Accounttype Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Account'] as $account): ?>
		<tr>
			<td><?php echo $account['id']; ?></td>
			<td><?php echo $account['accountNo']; ?></td>
			<td><?php echo $account['bankName']; ?></td>
			<td><?php echo $account['balance']; ?></td>
			<td><?php echo $account['district_id']; ?></td>
			<td><?php echo $account['union_id']; ?></td>
			<td><?php echo $account['accounttype_id']; ?></td>
			<td><?php echo $account['employee_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accounts', 'action' => 'delete', $account['id']), null, __('Are you sure you want to delete # %s?', $account['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Attendances'); ?></h3>
	<?php if (!empty($employee['Attendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datetime'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Days Present'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Attendance'] as $attendance): ?>
		<tr>
			<td><?php echo $attendance['id']; ?></td>
			<td><?php echo $attendance['datetime']; ?></td>
			<td><?php echo $attendance['year']; ?></td>
			<td><?php echo $attendance['month']; ?></td>
			<td><?php echo $attendance['days_present']; ?></td>
			<td><?php echo $attendance['employee_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendances', 'action' => 'view', $attendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendances', 'action' => 'edit', $attendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendances', 'action' => 'delete', $attendance['id']), null, __('Are you sure you want to delete # %s?', $attendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Baselinedatas'); ?></h3>
	<?php if (!empty($employee['Baselinedata'])): ?>
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
	<?php foreach ($employee['Baselinedata'] as $baselinedata): ?>
		<tr>
			<td><?php echo $baselinedata['id']; ?></td>
			<td><?php echo $baselinedata['baseline_id']; ?></td>
			<td><?php echo $baselinedata['NGO']; ?></td>
			<td><?php echo $baselinedata['employee_id']; ?></td>
			<td><?php echo $baselinedata['education']; ?></td>
			<td><?php echo $baselinedata['occupation']; ?></td>
			<td><?php echo $baselinedata['age']; ?></td>
			<td><?php echo $baselinedata['familyHeadName']; ?></td>
			<td><?php echo $baselinedata['familyHeadOccupation']; ?></td>
			<td><?php echo $baselinedata['familyHeadEducation']; ?></td>
			<td><?php echo $baselinedata['familyHeadAge']; ?></td>
			<td><?php echo $baselinedata['familyHeadDailyIncome']; ?></td>
			<td><?php echo $baselinedata['familyHeadLandOwned']; ?></td>
			<td><?php echo $baselinedata['totalFamilyMember']; ?></td>
			<td><?php echo $baselinedata['maleFamilyMember']; ?></td>
			<td><?php echo $baselinedata['totalChildren']; ?></td>
			<td><?php echo $baselinedata['childrenGoingToSchool']; ?></td>
			<td><?php echo $baselinedata['childrenTask']; ?></td>
			<td><?php echo $baselinedata['doesDayLabour']; ?></td>
			<td><?php echo $baselinedata['hasBussiness']; ?></td>
			<td><?php echo $baselinedata['hasAgriculture']; ?></td>
			<td><?php echo $baselinedata['isBegging']; ?></td>
			<td><?php echo $baselinedata['hasOthersIncome']; ?></td>
			<td><?php echo $baselinedata['IncomeType']; ?></td>
			<td><?php echo $baselinedata['haveOtherRegularIncomeSource']; ?></td>
			<td><?php echo $baselinedata['ownRegularIncome']; ?></td>
			<td><?php echo $baselinedata['husbandRegularIncome']; ?></td>
			<td><?php echo $baselinedata['parentsRegularincome']; ?></td>
			<td><?php echo $baselinedata['childrensRegularIncome']; ?></td>
			<td><?php echo $baselinedata['resourcesLeftByHusband']; ?></td>
			<td><?php echo $baselinedata['othersRegularIncome']; ?></td>
			<td><?php echo $baselinedata['landQuantityOwned']; ?></td>
			<td><?php echo $baselinedata['landHomestead']; ?></td>
			<td><?php echo $baselinedata['landCultivable']; ?></td>
			<td><?php echo $baselinedata['landKhasInPossion']; ?></td>
			<td><?php echo $baselinedata['hen']; ?></td>
			<td><?php echo $baselinedata['chicken']; ?></td>
			<td><?php echo $baselinedata['duck']; ?></td>
			<td><?php echo $baselinedata['swan']; ?></td>
			<td><?php echo $baselinedata['cow']; ?></td>
			<td><?php echo $baselinedata['goat']; ?></td>
			<td><?php echo $baselinedata['homesteadGarden']; ?></td>
			<td><?php echo $baselinedata['tree']; ?></td>
			<td><?php echo $baselinedata['pond']; ?></td>
			<td><?php echo $baselinedata['others']; ?></td>
			<td><?php echo $baselinedata['isVGDmember']; ?></td>
			<td><?php echo $baselinedata['isNGOmember']; ?></td>
			<td><?php echo $baselinedata['nameOfOrganization']; ?></td>
			<td><?php echo $baselinedata['yearsInvolvedInOrganization']; ?></td>
			<td><?php echo $baselinedata['loanAmountFromNGOorGrameenBank']; ?></td>
			<td><?php echo $baselinedata['loanAmount']; ?></td>
			<td><?php echo $baselinedata['loanYear']; ?></td>
			<td><?php echo $baselinedata['loanRepaid']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureFood']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureChildrenSchool']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureClothes']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureHaealth']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureTransportation']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureMobilephone']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureLoanRepayment']; ?></td>
			<td><?php echo $baselinedata['monthlyExpenditureOthers']; ?></td>
			<td><?php echo $baselinedata['isInterestedInRuralRoadmaintenance']; ?></td>
			<td><?php echo $baselinedata['isInterestedAsAnNGOworkers']; ?></td>
			<td><?php echo $baselinedata['relationshipstatuses_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'baselinedatas', 'action' => 'view', $baselinedata['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'baselinedatas', 'action' => 'edit', $baselinedata['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'baselinedatas', 'action' => 'delete', $baselinedata['id']), null, __('Are you sure you want to delete # %s?', $baselinedata['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Employeemeta'); ?></h3>
	<?php if (!empty($employee['Employeemetum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('FatherHusband'); ?></th>
		<th><?php echo __('NID'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('BirthRegNo'); ?></th>
		<th><?php echo __('DOB'); ?></th>
		<th><?php echo __('Village'); ?></th>
		<th><?php echo __('LoanAmount'); ?></th>
		<th><?php echo __('LoanPurpose'); ?></th>
		<th><?php echo __('PaidTillDate'); ?></th>
		<th><?php echo __('SavingsTillDate'); ?></th>
		<th><?php echo __('SavingTillDatePerBank'); ?></th>
		<th><?php echo __('Salarystatuses Id'); ?></th>
		<th><?php echo __('Baseline Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Employeemetum'] as $employeemetum): ?>
		<tr>
			<td><?php echo $employeemetum['id']; ?></td>
			<td><?php echo $employeemetum['name']; ?></td>
			<td><?php echo $employeemetum['fatherHusband']; ?></td>
			<td><?php echo $employeemetum['NID']; ?></td>
			<td><?php echo $employeemetum['employee_id']; ?></td>
			<td><?php echo $employeemetum['birthRegNo']; ?></td>
			<td><?php echo $employeemetum['DOB']; ?></td>
			<td><?php echo $employeemetum['village']; ?></td>
			<td><?php echo $employeemetum['loanAmount']; ?></td>
			<td><?php echo $employeemetum['loanPurpose']; ?></td>
			<td><?php echo $employeemetum['paidTillDate']; ?></td>
			<td><?php echo $employeemetum['savingsTillDate']; ?></td>
			<td><?php echo $employeemetum['savingTillDatePerBank']; ?></td>
			<td><?php echo $employeemetum['salarystatuses_id']; ?></td>
			<td><?php echo $employeemetum['baseline_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employeemeta', 'action' => 'view', $employeemetum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employeemeta', 'action' => 'edit', $employeemetum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employeemeta', 'action' => 'delete', $employeemetum['id']), null, __('Are you sure you want to delete # %s?', $employeemetum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employeemetum'), array('controller' => 'employeemeta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Salarystatuses'); ?></h3>
	<?php if (!empty($employee['Salarystatus'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cash'); ?></th>
		<th><?php echo __('Saving'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Salarystatus'] as $salarystatus): ?>
		<tr>
			<td><?php echo $salarystatus['id']; ?></td>
			<td><?php echo $salarystatus['cash']; ?></td>
			<td><?php echo $salarystatus['saving']; ?></td>
			<td><?php echo $salarystatus['employee_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'salarystatuses', 'action' => 'view', $salarystatus['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'salarystatuses', 'action' => 'edit', $salarystatus['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'salarystatuses', 'action' => 'delete', $salarystatus['id']), null, __('Are you sure you want to delete # %s?', $salarystatus['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Salarystatus'), array('controller' => 'salarystatuses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($employee['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datetime'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Account To'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Account From'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['datetime']; ?></td>
			<td><?php echo $transaction['year']; ?></td>
			<td><?php echo $transaction['month']; ?></td>
			<td><?php echo $transaction['reference']; ?></td>
			<td><?php echo $transaction['type']; ?></td>
			<td><?php echo $transaction['user_id']; ?></td>
			<td><?php echo $transaction['account_to']; ?></td>
			<td><?php echo $transaction['employee_id']; ?></td>
			<td><?php echo $transaction['account_from']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
