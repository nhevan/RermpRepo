<div class="baselinedata index">
	<h2><?php echo __('Baselinedata'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('baseline_id'); ?></th>
			<th><?php echo $this->Paginator->sort('NGO'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('education'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('familyHeadName'); ?></th>
			<th><?php echo $this->Paginator->sort('familyHeadOccupation'); ?></th>
			<th><?php echo $this->Paginator->sort('familyHeadEducation'); ?></th>
			<th><?php echo $this->Paginator->sort('familyHeadAge'); ?></th>
			<th><?php echo $this->Paginator->sort('familyHeadDailyIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('familyHeadLandOwned'); ?></th>
			<th><?php echo $this->Paginator->sort('totalFamilyMember'); ?></th>
			<th><?php echo $this->Paginator->sort('maleFamilyMember'); ?></th>
			<th><?php echo $this->Paginator->sort('totalChildren'); ?></th>
			<th><?php echo $this->Paginator->sort('childrenGoingToSchool'); ?></th>
			<th><?php echo $this->Paginator->sort('childrenTask'); ?></th>
			<th><?php echo $this->Paginator->sort('doesDayLabour'); ?></th>
			<th><?php echo $this->Paginator->sort('hasBussiness'); ?></th>
			<th><?php echo $this->Paginator->sort('hasAgriculture'); ?></th>
			<th><?php echo $this->Paginator->sort('isBegging'); ?></th>
			<th><?php echo $this->Paginator->sort('hasOthersIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('IncomeType'); ?></th>
			<th><?php echo $this->Paginator->sort('haveOtherRegularIncomeSource'); ?></th>
			<th><?php echo $this->Paginator->sort('ownRegularIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('husbandRegularIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('parentsRegularincome'); ?></th>
			<th><?php echo $this->Paginator->sort('childrensRegularIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('resourcesLeftByHusband'); ?></th>
			<th><?php echo $this->Paginator->sort('othersRegularIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('landQuantityOwned'); ?></th>
			<th><?php echo $this->Paginator->sort('landHomestead'); ?></th>
			<th><?php echo $this->Paginator->sort('landCultivable'); ?></th>
			<th><?php echo $this->Paginator->sort('landKhasInPossion'); ?></th>
			<th><?php echo $this->Paginator->sort('hen'); ?></th>
			<th><?php echo $this->Paginator->sort('chicken'); ?></th>
			<th><?php echo $this->Paginator->sort('duck'); ?></th>
			<th><?php echo $this->Paginator->sort('swan'); ?></th>
			<th><?php echo $this->Paginator->sort('cow'); ?></th>
			<th><?php echo $this->Paginator->sort('goat'); ?></th>
			<th><?php echo $this->Paginator->sort('homesteadGarden'); ?></th>
			<th><?php echo $this->Paginator->sort('tree'); ?></th>
			<th><?php echo $this->Paginator->sort('pond'); ?></th>
			<th><?php echo $this->Paginator->sort('others'); ?></th>
			<th><?php echo $this->Paginator->sort('isVGDmember'); ?></th>
			<th><?php echo $this->Paginator->sort('isNGOmember'); ?></th>
			<th><?php echo $this->Paginator->sort('nameOfOrganization'); ?></th>
			<th><?php echo $this->Paginator->sort('yearsInvolvedInOrganization'); ?></th>
			<th><?php echo $this->Paginator->sort('loanAmountFromNGOorGrameenBank'); ?></th>
			<th><?php echo $this->Paginator->sort('loanAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('loanYear'); ?></th>
			<th><?php echo $this->Paginator->sort('loanRepaid'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureFood'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureChildrenSchool'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureClothes'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureHaealth'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureTransportation'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureMobilephone'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureLoanRepayment'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyExpenditureOthers'); ?></th>
			<th><?php echo $this->Paginator->sort('isInterestedInRuralRoadmaintenance'); ?></th>
			<th><?php echo $this->Paginator->sort('isInterestedAsAnNGOworkers'); ?></th>
			<th><?php echo $this->Paginator->sort('relationshipstatuses_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($baselinedata as $baselinedatum): ?>
	<tr>
		<td><?php echo h($baselinedatum['Baselinedatum']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($baselinedatum['Baseline']['id'], array('controller' => 'baselines', 'action' => 'view', $baselinedatum['Baseline']['id'])); ?>
		</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['NGO']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($baselinedatum['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $baselinedatum['Employee']['id'])); ?>
		</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['education']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['age']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['familyHeadName']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['familyHeadOccupation']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['familyHeadEducation']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['familyHeadAge']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['familyHeadDailyIncome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['familyHeadLandOwned']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['totalFamilyMember']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['maleFamilyMember']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['totalChildren']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['childrenGoingToSchool']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['childrenTask']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['doesDayLabour']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['hasBussiness']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['hasAgriculture']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['isBegging']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['hasOthersIncome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['IncomeType']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['haveOtherRegularIncomeSource']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['ownRegularIncome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['husbandRegularIncome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['parentsRegularincome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['childrensRegularIncome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['resourcesLeftByHusband']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['othersRegularIncome']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['landQuantityOwned']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['landHomestead']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['landCultivable']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['landKhasInPossion']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['hen']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['chicken']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['duck']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['swan']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['cow']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['goat']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['homesteadGarden']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['tree']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['pond']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['others']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['isVGDmember']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['isNGOmember']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['nameOfOrganization']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['yearsInvolvedInOrganization']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['loanAmountFromNGOorGrameenBank']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['loanAmount']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['loanYear']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['loanRepaid']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureFood']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureChildrenSchool']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureClothes']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureHaealth']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureTransportation']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureMobilephone']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureLoanRepayment']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['monthlyExpenditureOthers']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['isInterestedInRuralRoadmaintenance']); ?>&nbsp;</td>
		<td><?php echo h($baselinedatum['Baselinedatum']['isInterestedAsAnNGOworkers']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($baselinedatum['Relationshipstatus']['name'], array('controller' => 'relationshipstatuses', 'action' => 'view', $baselinedatum['Relationshipstatus']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $baselinedatum['Baselinedatum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $baselinedatum['Baselinedatum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $baselinedatum['Baselinedatum']['id']), null, __('Are you sure you want to delete # %s?', $baselinedatum['Baselinedatum']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Baselinedatum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('controller' => 'baselines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('controller' => 'baselines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
