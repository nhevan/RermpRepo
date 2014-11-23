<div class="upazillas index">
	<h2><?php echo __('Upazillas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lgedRefId'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('district_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($upazillas as $upazilla): ?>
	<tr>
		<td><?php echo h($upazilla['Upazilla']['id']); ?>&nbsp;</td>
		<td><?php echo h($upazilla['Upazilla']['lgedRefId']); ?>&nbsp;</td>
		<td><?php echo h($upazilla['Upazilla']['name']); ?>&nbsp;</td>
		<td><?php echo h($upazilla['Upazilla']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($upazilla['User']['name'], array('controller' => 'users', 'action' => 'view', $upazilla['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($upazilla['District']['name'], array('controller' => 'districts', 'action' => 'view', $upazilla['District']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $upazilla['Upazilla']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $upazilla['Upazilla']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $upazilla['Upazilla']['id']), null, __('Are you sure you want to delete # %s?', $upazilla['Upazilla']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Upazilla'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unions'), array('controller' => 'unions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
	</ul>
</div>
