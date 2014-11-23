<div class="salarystatuses index">
	<h2><?php echo __('Salarystatuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cash'); ?></th>
			<th><?php echo $this->Paginator->sort('saving'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_on'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salarystatuses as $salarystatus): ?>
	<tr>
		<td><?php echo h($salarystatus['Salarystatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($salarystatus['Salarystatus']['cash']); ?>&nbsp;</td>
		<td><?php echo h($salarystatus['Salarystatus']['saving']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salarystatus['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $salarystatus['Employee']['id'])); ?>
		</td>
		<td><?php echo h($salarystatus['Salarystatus']['updated_on']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salarystatus['Salarystatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salarystatus['Salarystatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salarystatus['Salarystatus']['id']), null, __('Are you sure you want to delete # %s?', $salarystatus['Salarystatus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salarystatus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
