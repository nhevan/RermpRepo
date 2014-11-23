<div class="employeemeta index">
	<h2><?php echo __('Employeemeta'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('fatherHusband'); ?></th>
			<th><?php echo $this->Paginator->sort('NID'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('birthRegNo'); ?></th>
			<th><?php echo $this->Paginator->sort('DOB'); ?></th>
			<th><?php echo $this->Paginator->sort('village'); ?></th>
			<th><?php echo $this->Paginator->sort('loanAmount'); ?></th>
			<th><?php echo $this->Paginator->sort('loanPurpose'); ?></th>
			<th><?php echo $this->Paginator->sort('paidTillDate'); ?></th>
			<th><?php echo $this->Paginator->sort('savingsTillDate'); ?></th>
			<th><?php echo $this->Paginator->sort('savingTillDatePerBank'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employeemeta as $employeemetum): ?>
	<tr>
		<td><?php echo h($employeemetum['Employeemetum']['id']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['name']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['fatherHusband']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['NID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employeemetum['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $employeemetum['Employee']['id'])); ?>
		</td>
		<td><?php echo h($employeemetum['Employeemetum']['birthRegNo']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['DOB']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['village']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['loanAmount']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['loanPurpose']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['paidTillDate']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['savingsTillDate']); ?>&nbsp;</td>
		<td><?php echo h($employeemetum['Employeemetum']['savingTillDatePerBank']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeemetum['Employeemetum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeemetum['Employeemetum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeemetum['Employeemetum']['id']), null, __('Are you sure you want to delete # %s?', $employeemetum['Employeemetum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employeemetum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
