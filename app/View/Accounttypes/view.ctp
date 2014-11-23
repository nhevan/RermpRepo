<div class="accounttypes view">
<h2><?php echo __('Accounttype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accounttype['Accounttype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accounttype['Accounttype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($accounttype['Accounttype']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($accounttype['Accounttype']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounttype'), array('action' => 'edit', $accounttype['Accounttype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accounttype'), array('action' => 'delete', $accounttype['Accounttype']['id']), null, __('Are you sure you want to delete # %s?', $accounttype['Accounttype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounttypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounttype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($accounttype['Account'])): ?>
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
	<?php foreach ($accounttype['Account'] as $account): ?>
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
