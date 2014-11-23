<div class="familymembers view">
<h2><?php echo __('Familymember'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MonthlyIncome'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['monthlyIncome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsUnderWeight'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['isUnderWeight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ArmMeasure'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['armMeasure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsMalnourished'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['isMalnourished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsStunded'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['isStunded']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AnyDisease'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['anyDisease']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DoctorVisited'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['doctorVisited']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relation'); ?></dt>
		<dd>
			<?php echo h($familymember['Familymember']['relation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familymember['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $familymember['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baseline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familymember['Baseline']['id'], array('controller' => 'baselines', 'action' => 'view', $familymember['Baseline']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Familymember'), array('action' => 'edit', $familymember['Familymember']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Familymember'), array('action' => 'delete', $familymember['Familymember']['id']), null, __('Are you sure you want to delete # %s?', $familymember['Familymember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Familymembers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familymember'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselines'), array('controller' => 'baselines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baseline'), array('controller' => 'baselines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('controller' => 'femalemembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Femalemember'), array('controller' => 'femalemembers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Femalemembers'); ?></h3>
	<?php if (!empty($familymember['Femalemember'])): ?>
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
	<?php foreach ($familymember['Femalemember'] as $femalemember): ?>
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
