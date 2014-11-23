<div class="upazillas view">
<h1><?php echo __($upazilla['Upazilla']['name'].' Upazilla Overview'); ?></h1>
	<table class="table table-bordered genericTable" style="max-width:60%;">
		<tr>
			<td>System Id :</td>
			<td><?php echo h($upazilla['Upazilla']['id']); ?></td>
		</tr>
		<tr>
			<td>Upazilla :</td>
			<td><?php echo h($upazilla['Upazilla']['name']); ?></td>
		</tr>
		<tr>
			<td>District :</td>
			<td><?php echo h($upazilla['District']['name']); ?></td>
		</tr>
		<tr>
			<td>Division :</td>
			<td><?php echo h($upazilla['District']['Division']['name']); ?></td>
		</tr>
		<tr>
			<td>upazilla Description :</td>
			<td><?php echo h($upazilla['Upazilla']['description']); ?></td>
		</tr>
		<tr>
			<td>upazilla Created By :</td>
			<td><?php echo h($upazilla['Upazilla']['user_id']); ?></td>
		</tr>
		<tr>
			<td>Employees :</td>
			<td><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'upazillaEmployees',$upazilla['Upazilla']['id'] ),array('class'=>'btn btn-success')); ?> </td>
		</tr>
		
	</table>
</div>

<div>
	<h3><?php echo __('Union List'); ?></h3>
	<table class="table table-bordered" style="width:auto">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>No. of Employees</td>
			<td>Detail</td>
		</tr>
		<?
			foreach($upazilla['Union'] as $union){
			?>
			<tr>
				<td><? echo $union['id']; ?></td>
				<td><? echo $union['name']; ?></td>
				<td><? echo count($union['Employee']); ?> Employees</td>
				<td><?php echo $this->Html->link(__('Union Detail'), array('controller' => 'unions', 'action' => 'overview',$union['id'] ),array('class'=>'btn btn-info')); ?> </td>
			</tr>
			<?
			}
		?>
	
	</table>
</div>

<div class="related">
	<h3><?php echo __('Account Detail'); ?></h3>
	<?php if (!empty($accountinfo)): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered genericTable">
	<tr>
		<th><?php echo __('AccountNo'); ?></th>
		<th><?php echo __('BankName'); ?></th>
		<th><?php echo __('Balance'); ?></th>
	</tr>
		<?  foreach($accountinfo as $singleAccount): ?>
		<tr>
			<td style="text-align:left";><?php echo $accountinfo[0]['Account']['accountNo']; ?></td>
			<td><?php echo $singleAccount['Account']['bankName']; ?></td>
			<td>
				<?php echo $singleAccount['Account']['balance']; ?> BDT
				
				<? echo $this->HTML->link('View Detail',array('controller'=>'accounts','action'=>'detail',$singleAccount['Account']['id']),array('class'=>'btn btn-info'));  ?>
			</td>
		</tr>
	<? endforeach; ?>

	</table>
<?php endif; ?>
<?
	if (empty($accountinfo)){
		echo __("<p class='alert alert-warning'>No account found under this upazilla. Please add one now. ");
		echo $this->Html->link(__('Add upazilla Account'), array('controller' => 'accounts', 'action' => 'addupazillaAccount'),array('class'=>'btn btn-warning'));
		echo "</p>";
	}
?>
</div>

<div>
	<h3><?php echo __('Accumulated Employee Overview'); ?></h3>
	<?
	$totalE = 0;
	$activeE = 0;
	$totalSaving = 0;
	$totalCash = 0;
	foreach ($upazilla['Union'] as $employee){
		
		$totalE += count($employee['Employee']);
		foreach($employee['Employee'] as $emp){
			if(!empty($emp)){
				if((int)$emp['isActive']==1) $activeE++;
			}
			if(!empty($emp['Salarystatus'])){
				$totalCash += (int)$emp['Salarystatus'][0]['cash'];
				$totalSaving += (int)$emp['Salarystatus'][0]['saving'];
			}
		}
	}
	
	?>
	<table class="table table-bordered genericTable" style="width:auto;">
		<tr>
			<td>Total Employees</td>
			<td><span class="badge"><? echo $totalE; ?></span></td>
		</tr>
		<tr>
			<td>Total Active Employees</td>
			<td><span class="badge"><? echo $activeE; ?></span></td>
		</tr>
		<tr>
			<td>Total Inactive Employees</td>
			<td><span class="badge"><? echo $totalE-$activeE; ?></span></td>
		</tr>
		<tr>
			<td>Total Earned by Employees</td>
			<td><span class="badge"><? echo $totalSaving+$totalCash; ?> BDT</span></td>
		</tr>
		<tr>
			<td>Total Cash Paid to Employees</td>
			<td><span class="badge pull-right"><? echo $totalCash; ?> BDT</span>
		</tr>
		<tr>
			<td>Total Saving by Employees</td>
			<td><span class="badge pull-right"><? echo $totalSaving; ?> BDT</span></td>
		</tr>
	</table>
</div><!-- employee overview ends -->

