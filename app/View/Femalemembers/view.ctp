<div class="femalemembers view">
<h2><?php echo __('Femalemember'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($femalemember['Femalemember']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsMarried'); ?></dt>
		<dd>
			<?php echo h($femalemember['Femalemember']['isMarried']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsPregnent'); ?></dt>
		<dd>
			<?php echo h($femalemember['Femalemember']['isPregnent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsLactating'); ?></dt>
		<dd>
			<?php echo h($femalemember['Femalemember']['isLactating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LiveWithHusband'); ?></dt>
		<dd>
			<?php echo h($femalemember['Femalemember']['liveWithHusband']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familymember'); ?></dt>
		<dd>
			<?php echo $this->Html->link($femalemember['Familymember']['name'], array('controller' => 'familymembers', 'action' => 'view', $femalemember['Familymember']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationshipstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($femalemember['Relationshipstatus']['name'], array('controller' => 'relationshipstatuses', 'action' => 'view', $femalemember['Relationshipstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baselinedata'); ?></dt>
		<dd>
			<?php echo $this->Html->link($femalemember['Baselinedata']['id'], array('controller' => 'baselinedatas', 'action' => 'view', $femalemember['Baselinedata']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Femalemember'), array('action' => 'edit', $femalemember['Femalemember']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Femalemember'), array('action' => 'delete', $femalemember['Femalemember']['id']), null, __('Are you sure you want to delete # %s?', $femalemember['Femalemember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Femalemembers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Femalemember'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familymembers'), array('controller' => 'familymembers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familymember'), array('controller' => 'familymembers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relationshipstatuses'), array('controller' => 'relationshipstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relationshipstatus'), array('controller' => 'relationshipstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
