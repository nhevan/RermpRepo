<div class="awarenesses view">
<h2><?php echo __('Awareness'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChildrenSchooling'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['childrenSchooling']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HospitalLocation'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['hospitalLocation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HospitalFee'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['hospitalFee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OreSalinePreparation'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['oreSalinePreparation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WashingHands'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['washingHands']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdeaOfNutritiona;Food'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['ideaOfNutritiona;Food']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PoultryDiseaseRelatedService'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['poultryDiseaseRelatedService']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CommonDisease'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['commonDisease']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LocationLocalNGOoffice'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['LocationLocalNGOoffice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CanReadWrite'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['CanReadWrite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AwareOfSamallBussiness'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['awareOfSamallBussiness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('KnowledgeOfFeeForMoneyTransfer'); ?></dt>
		<dd>
			<?php echo h($awareness['Awareness']['KnowledgeOfFeeForMoneyTransfer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baselinedata'); ?></dt>
		<dd>
			<?php echo $this->Html->link($awareness['Baselinedata']['id'], array('controller' => 'baselinedatas', 'action' => 'view', $awareness['Baselinedata']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Awareness'), array('action' => 'edit', $awareness['Awareness']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Awareness'), array('action' => 'delete', $awareness['Awareness']['id']), null, __('Are you sure you want to delete # %s?', $awareness['Awareness']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Awarenesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Awareness'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Baselinedatas'), array('controller' => 'baselinedatas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baselinedata'), array('controller' => 'baselinedatas', 'action' => 'add')); ?> </li>
	</ul>
</div>
