<div class="upazillas view">
<h2><?php echo __('Upazilla'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($upazilla['Upazilla']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LgedRefId'); ?></dt>
		<dd>
			<?php echo h($upazilla['Upazilla']['lgedRefId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($upazilla['Upazilla']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($upazilla['Upazilla']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($upazilla['User']['name'], array('controller' => 'users', 'action' => 'view', $upazilla['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($upazilla['District']['name'], array('controller' => 'districts', 'action' => 'view', $upazilla['District']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upazilla'), array('action' => 'edit', $upazilla['Upazilla']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upazilla'), array('action' => 'delete', $upazilla['Upazilla']['id']), null, __('Are you sure you want to delete # %s?', $upazilla['Upazilla']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Upazillas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upazilla'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unions'), array('controller' => 'unions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Unions'); ?></h3>
	<?php if (!empty($upazilla['Union'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Decsription'); ?></th>
		<th><?php echo __('CreatedBy'); ?></th>
		<th><?php echo __('CreationTime'); ?></th>
		<th><?php echo __('Upazilla Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($upazilla['Union'] as $union): ?>
		<tr>
			<td><?php echo $union['id']; ?></td>
			<td><?php echo $union['name']; ?></td>
			<td><?php echo $union['decsription']; ?></td>
			<td><?php echo $union['createdBy']; ?></td>
			<td><?php echo $union['creationTime']; ?></td>
			<td><?php echo $union['upazilla_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'unions', 'action' => 'view', $union['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'unions', 'action' => 'edit', $union['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'unions', 'action' => 'delete', $union['id']), null, __('Are you sure you want to delete # %s?', $union['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Union'), array('controller' => 'unions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
