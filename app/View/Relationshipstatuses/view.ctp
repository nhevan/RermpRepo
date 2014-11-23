<div class="relationshipstatuses view">
<h2><?php echo __('Relationshipstatus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($relationshipstatus['Relationshipstatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($relationshipstatus['Relationshipstatus']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($relationshipstatus['Relationshipstatus']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Relationshipstatus'), array('action' => 'edit', $relationshipstatus['Relationshipstatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Relationshipstatus'), array('action' => 'delete', $relationshipstatus['Relationshipstatus']['id']), null, __('Are you sure you want to delete # %s?', $relationshipstatus['Relationshipstatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('controller' => 'femalemembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Femalemember'), array('controller' => 'femalemembers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Femalemembers'); ?></h3>
	<?php if (!empty($relationshipstatus['Femalemember'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('IsMarried'); ?></th>
		<th><?php echo __('IsPregnent'); ?></th>
		<th><?php echo __('IsLactating'); ?></th>
		<th><?php echo __('LiveWithHusband'); ?></th>
		<th><?php echo __('Familymember Id'); ?></th>
		<th><?php echo __('Relationshipstatus Id'); ?></th>
		<th><?php echo __('Baselinedata Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($relationshipstatus['Femalemember'] as $femalemember): ?>
		<tr>
			<td><?php echo $femalemember['id']; ?></td>
			<td><?php echo $femalemember['isMarried']; ?></td>
			<td><?php echo $femalemember['isPregnent']; ?></td>
			<td><?php echo $femalemember['isLactating']; ?></td>
			<td><?php echo $femalemember['liveWithHusband']; ?></td>
			<td><?php echo $femalemember['familymember_id']; ?></td>
			<td><?php echo $femalemember['relationshipstatus_id']; ?></td>
			<td><?php echo $femalemember['baselinedata_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'femalemembers', 'action' => 'view', $femalemember['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'femalemembers', 'action' => 'edit', $femalemember['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'femalemembers', 'action' => 'delete', $femalemember['id']), null, __('Are you sure you want to delete # %s?', $femalemember['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Femalemember'), array('controller' => 'femalemembers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
