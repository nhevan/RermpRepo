<div class="unions index">
	<h2><?php echo __('Unions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('decsription'); ?></th>
			<th><?php echo $this->Paginator->sort('createdBy'); ?></th>
			<th><?php echo $this->Paginator->sort('creationTime'); ?></th>
			<th><?php echo $this->Paginator->sort('upazilla_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($unions as $union): ?>
	<tr>
		<td><?php echo h($union['Union']['id']); ?>&nbsp;</td>
		<td><?php echo h($union['Union']['name']); ?>&nbsp;</td>
		<td><?php echo h($union['Union']['decsription']); ?>&nbsp;</td>
		<td><?php echo h($union['Union']['createdBy']); ?>&nbsp;</td>
		<td><?php echo h($union['Union']['creationTime']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($union['Upazilla']['name'], array('controller' => 'upazillas', 'action' => 'view', $union['Upazilla']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $union['Union']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $union['Union']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $union['Union']['id']), null, __('Are you sure you want to delete # %s?', $union['Union']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Union'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Upazillas'), array('controller' => 'upazillas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upazilla'), array('controller' => 'upazillas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
