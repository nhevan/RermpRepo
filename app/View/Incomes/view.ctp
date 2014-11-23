<div class="incomes view">
<h2><?php echo __('Income'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($income['Income']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($income['Income']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Incometype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Incometype']['name'], array('controller' => 'incometypes', 'action' => 'view', $income['Incometype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendance'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Attendance']['id'], array('controller' => 'attendances', 'action' => 'view', $income['Attendance']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Income'), array('action' => 'edit', $income['Income']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Income'), array('action' => 'delete', $income['Income']['id']), null, __('Are you sure you want to delete # %s?', $income['Income']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incometypes'), array('controller' => 'incometypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incometype'), array('controller' => 'incometypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
