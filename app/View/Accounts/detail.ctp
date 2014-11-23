<div class="accounts view">
<h3><?php echo __('Account Details'); ?></h3>




<?php //echo $this->Html->link($account['Accounttype']['name'], array('controller' => 'accounttypes', 'action' => 'view', $account['Accounttype']['id'])); ?>
<?php //echo h($account['Account']['refId']); ?>
	<table class="table table-bordered">
		<tr>
			<td>Account Id</td>
			<td>Bank Name</td>
			<td>Account Number</td>
			<td>Current Balance</td>
		</tr>
		<tr>
			<td><?php echo h($account['Account']['id']); ?></td>
			<td><?php echo h($account['Account']['bankName']); ?></td>
			<td><?php echo h($account['Account']['accountNo']); ?></td>
			<td><?php echo h($account['Account']['balance']); ?> BDT</td>
		</tr>
	</table>
</div>

<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($account['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datetime'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Reference'); ?></th>


		<th><?php echo __('User'); ?></th>

		<th><?php echo __('Source Account'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Previous Balance'); ?></th>
		<th><?php echo __('Amount Transferred'); ?></th>
		<th><?php echo __('Current Balance'); ?></th>

	</tr>
	<?php foreach ($account['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['datetime']; ?></td>
			<td><?php echo $transaction['year']; ?></td>
			<td><?php echo $transaction['month']; ?></td>
			<td><?php echo $transaction['reference']; ?></td>


			<td><?php echo $transaction['user_id']; ?></td>

			<td>
				<?
				echo $this->Html->link('View Account', array(
				    'controller' => 'accounts',
				    'action' => 'detail',
				    $transaction['account_from'])
				);
	
				?>
			</td>
			<? $type = "unknown"; 
				if((int)$transaction['type']==1) $type = "Credit";
				if((int)$transaction['type']==2) $type = "Debit";
			?>
			<td><?php echo $type; ?></td>
			<td><?php echo $transaction['previous_balance']; ?> BDT</td>
			<td><?php echo $transaction['amount']; ?> BDT</td>
			<td><?php echo $transaction['current_balance']; ?> BDT</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
