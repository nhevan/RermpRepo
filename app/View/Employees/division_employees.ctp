
<?
$currentPage =  $this->Paginator->counter('{:page}');
$count = ($currentPage*$limit); 
$count = $count - ($limit-1);

$unionName = $employees[0]['Union']['name'];

?>

<div class="employees index">
	<h2><?php echo 'Employees under '.$DivisionName; ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<tr>
			<th>#</th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('FullName','Nick, Full Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Union.name','Union Name'); ?></th>
			<th><?php echo $this->Paginator->sort('UpazillaName','Upazilla Name'); ?></th>
			<th><?php echo $this->Paginator->sort('DistrictName','District Name'); ?></th>
			<th><?php echo $this->Paginator->sort('cash','Cash Paid'); ?></th>
			<th><?php echo $this->Paginator->sort('saving','Savings'); ?></th>
			<th><?php echo $this->Paginator->sort('isActive'); ?></th>
			<th>Actions</th>
	</tr>

	<?php foreach ($employees as $employee): ?>

	<? 
	
	if(isset($employee['Employeemetum'][0])) $fName = $employee['Employeemetum'][0]['name'];
	else $fName = "--Not Available--";
	
	
	$cash = 0;
	$saving = 0;
	$total = 0;
	if(!empty($employee['Salarystatus'])){
		$cash = $employee['Employee']['cash'];
		$saving = $employee['Employee']['saving'];
		$total = $cash + $saving;
	}else{
		$cash = $saving = $total = "No Record";
	}
		
 	?>

	<tr>
		<td><?  echo $count++; ?> </td>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['FullName']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['Union']['name'], array('controller' => 'unions', 'action' => 'overview', $employee['Union']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['Employee']['UpazillaName'], array('controller' => 'upazillas', 'action' => 'overview', $employee['Upazilla']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['Employee']['DistrictName'], array('controller' => 'districts', 'action' => 'overview', $employee['District']['id'])); ?>
		</td>
		<td><?php echo h($cash); ?> BDT&nbsp;</td>
		<td><?php echo h($saving); ?> BDT&nbsp;</td>
		<?  
		$status = (int)$employee['Employee']['isActive'];

		if($status==1) $status = "Active";
		elseif($status==0) $status = "Inactive";
		?>
		<td><?php echo h($status); ?>&nbsp;</td>
		<td>
			<a href="/RERMP2/employees/info/<? echo $employee['Employee']['id'];?>" type="button" class="btn btn-info">Detail</a>
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
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>