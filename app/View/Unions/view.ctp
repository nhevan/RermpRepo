<div class="unions view">
<h2><?php echo __('Union'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($union['Union']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($union['Union']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Decsription'); ?></dt>
		<dd>
			<?php echo h($union['Union']['decsription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($union['Union']['createdBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreationTime'); ?></dt>
		<dd>
			<?php echo h($union['Union']['creationTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upazilla'); ?></dt>
		<dd>
			<?php echo $this->Html->link($union['Upazilla']['name'], array('controller' => 'upazillas', 'action' => 'view', $union['Upazilla']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Union'), array('action' => 'edit', $union['Union']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Union'), array('action' => 'delete', $union['Union']['id']), null, __('Are you sure you want to delete # %s?', $union['Union']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Union'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Upazillas'), array('controller' => 'upazillas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upazilla'), array('controller' => 'upazillas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($union['Account'])): ?>
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
	<?php foreach ($union['Account'] as $account): ?>
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
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($union['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('IsActive'); ?></th>
		<th><?php echo __('Union Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($union['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['isActive']; ?></td>
			<td><?php echo $employee['union_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
