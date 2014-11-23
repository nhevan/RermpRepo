<div class="employeemeta view">
<h2><?php echo __('Employeemetum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FatherHusband'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['fatherHusband']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NID'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['NID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeemetum['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $employeemetum['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BirthRegNo'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['birthRegNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DOB'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['DOB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Village'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['village']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanAmount'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['loanAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoanPurpose'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['loanPurpose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaidTillDate'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['paidTillDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SavingsTillDate'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['savingsTillDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SavingTillDatePerBank'); ?></dt>
		<dd>
			<?php echo h($employeemetum['Employeemetum']['savingTillDatePerBank']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employeemetum'), array('action' => 'edit', $employeemetum['Employeemetum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employeemetum'), array('action' => 'delete', $employeemetum['Employeemetum']['id']), null, __('Are you sure you want to delete # %s?', $employeemetum['Employeemetum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeemeta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeemetum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
