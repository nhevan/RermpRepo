<div class="femalemembers index">
	<h2><?php echo __('Femalemembers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('isMarried'); ?></th>
			<th><?php echo $this->Paginator->sort('isPregnent'); ?></th>
			<th><?php echo $this->Paginator->sort('isLactating'); ?></th>
			<th><?php echo $this->Paginator->sort('liveWithHusband'); ?></th>
			<th><?php echo $this->Paginator->sort('familymember_id'); ?></th>
			<th><?php echo $this->Paginator->sort('relationshipstatus_id'); ?></th>
			<th><?php echo $this->Paginator->sort('baselinedata_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($femalemembers as $femalemember): ?>
	<tr>
		<td><?php echo h($femalemember['Femalemember']['id']); ?>&nbsp;</td>
		<td><?php echo h($femalemember['Femalemember']['isMarried']); ?>&nbsp;</td>
		<td><?php echo h($femalemember['Femalemember']['isPregnent']); ?>&nbsp;</td>
		<td><?php echo h($femalemember['Femalemember']['isLactating']); ?>&nbsp;</td>
		<td><?php echo h($femalemember['Femalemember']['liveWithHusband']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($femalemember['Familymember']['name'], array('controller' => 'familymembers', 'action' => 'view', $femalemember['Familymember']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($femalemember['Relationshipstatus']['name'], array('controller' => 'relationshipstatuses', 'action' => 'view', $femalemember['Relationshipstatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($femalemember['Baselinedatum']['id'], array('controller' => 'baselinedata', 'action' => 'view', $femalemember['Baselinedatum']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $femalemember['Femalemember']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $femalemember['Femalemember']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $femalemember['Femalemember']['id']), null, __('Are you sure you want to delete # %s?', $femalemember['Femalemember']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Femalemember'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Familymembers'), array('controller' => 'familymembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familymember'), array('controller' => 'familymembers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatus'), array('controller' => 'relationshipstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
