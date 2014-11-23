<div class="salarystatuses view">
<h2><?php echo __('Salarystatus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salarystatus['Salarystatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash'); ?></dt>
		<dd>
			<?php echo h($salarystatus['Salarystatus']['cash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saving'); ?></dt>
		<dd>
			<?php echo h($salarystatus['Salarystatus']['saving']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salarystatus['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $salarystatus['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated On'); ?></dt>
		<dd>
			<?php echo h($salarystatus['Salarystatus']['updated_on']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salarystatus'), array('action' => 'edit', $salarystatus['Salarystatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salarystatus'), array('action' => 'delete', $salarystatus['Salarystatus']['id']), null, __('Are you sure you want to delete # %s?', $salarystatus['Salarystatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salarystatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salarystatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
