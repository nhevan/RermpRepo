
<div class="districts view">
<h1><?php echo __($district['District']['name'].' District Overview'); ?></h1>
	<table class="table table-bordered genericTable" style="max-width:60%;">
		<tr>
			<td>System Id :</td>
			<td><?php echo h($district['District']['id']); ?></td>
		</tr>
		<tr>
			<td>District :</td>
			<td><?php echo h($district['District']['name']); ?></td>
		</tr>
		<tr>
			<td>Division :</td>
			<td><?php echo h($district['Division']['name']); ?></td>
		</tr>
		<tr>
			<td>district Created By :</td>
			<td><?php echo h($district['District']['user_id']); ?></td>
		</tr>
		<tr>
			<td>Employees :</td>
			<td><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'DistrictEmployees',$district['District']['id'] ),array('class'=>'btn btn-success')); ?> </td>
		</tr>
		
	</table>
</div>

<div>
	<h3><?php echo __('Upazilla List'); ?></h3>
	<table class="table table-bordered" style="width:auto">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>No. of Employees</td>
			<td>Detail</td>
		</tr>
		<?
			foreach($district['Upazilla'] as $upazilla){
			?>
			<tr>
				<td><? echo $upazilla['id']; ?></td>
				<td><? echo $upazilla['name']; ?></td>
				
				<?
					$Ecount = 0;
					foreach($upazilla['Union'] as $union){
						$Ecount += count($union['Employee']) ;
					}
				
				?>
				<td><? echo $Ecount; ?> Employees</td>
				<td><?php echo $this->Html->link(__('Upazilla Detail'), array('controller' => 'upazillas', 'action' => 'overview',$upazilla['id'] ),array('class'=>'btn btn-info')); ?> </td>
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
		echo __("<p class='alert alert-warning'>No account found under this district. Please add one now. ");
		echo $this->Html->link(__('Add district Account'), array('controller' => 'accounts', 'action' => 'addDistrictAccount'),array('class'=>'btn btn-warning'));
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
	foreach($district['Upazilla'] as $upazilla){
		foreach($upazilla['Union'] as $union){
			foreach ($union['Employee'] as $employee){
				$totalE ++;
				if(!empty($employee)){
					if((int)$employee['isActive']==1) $activeE++;
				}
				if(!empty($employee['Salarystatus'])){
					$totalCash += (int)$employee['Salarystatus'][0]['cash'];
					$totalSaving += (int)$employee['Salarystatus'][0]['saving'];
				}

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

