<div class="baselines view">
<h2><?php echo __('Baseline'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($baseline['Baseline']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FiscalYear'); ?></dt>
		<dd>
			<?php echo h($baseline['Baseline']['fiscalYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($baseline['Baseline']['month']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Baseline'), array('action' => 'edit', $baseline['Baseline']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Baseline'), array('action' => 'delete', $baseline['Baseline']['id']), null, __('Are you sure you want to delete # %s?', $baseline['Baseline']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Baselinedatas'); ?></h3>
	<?php if (!empty($baseline['Baselinedata'])): ?>
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
	<?php foreach ($baseline['Baselinedata'] as $baselinedata): ?>
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
