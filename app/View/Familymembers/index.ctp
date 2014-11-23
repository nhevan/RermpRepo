<div class="familymembers index">
	<h2><?php echo __('Familymembers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('education'); ?></th>
			<th><?php echo $this->Paginator->sort('monthlyIncome'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('isUnderWeight'); ?></th>
			<th><?php echo $this->Paginator->sort('armMeasure'); ?></th>
			<th><?php echo $this->Paginator->sort('isMalnourished'); ?></th>
			<th><?php echo $this->Paginator->sort('isStunded'); ?></th>
			<th><?php echo $this->Paginator->sort('anyDisease'); ?></th>
			<th><?php echo $this->Paginator->sort('doctorVisited'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('relation'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('baseline_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($familymembers as $familymember): ?>
	<tr>
		<td><?php echo h($familymember['Familymember']['id']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['name']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['sex']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['age']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['education']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['monthlyIncome']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['height']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['weight']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['isUnderWeight']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['armMeasure']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['isMalnourished']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['isStunded']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['anyDisease']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['doctorVisited']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($familymember['Familymember']['relation']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familymember['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $familymember['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($familymember['Baseline']['id'], array('controller' => 'baselines', 'action' => 'view', $familymember['Baseline']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $familymember['Familymember']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $familymember['Familymember']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $familymember['Familymember']['id']), null, __('Are you sure you want to delete # %s?', $familymember['Familymember']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Familymember'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('controller' => 'baselines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('controller' => 'baselines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('controller' => 'femalemembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Femalemember'), array('controller' => 'femalemembers', 'action' => 'add')); ?> </li>
	</ul>
</div>
