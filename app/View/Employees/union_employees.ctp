<? 
$currentPage =  $this->Paginator->counter('{:page}');
$count = ($currentPage*$limit); 
$count = $count - ($limit-1);

if(!empty($employees)){
	$unionName = $employees[0]['Union']['name'];


?>

<div class="employees index">
	<h2><?php echo 'Employees under '.$unionName; ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<tr>
			<th>#</th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name','Name'); ?></th>
			<th>Full Name</th>
			<th><?php echo $this->Paginator->sort('union_id','Union Name'); ?></th>
			<th><?php echo $this->Paginator->sort('isActive'); ?></th>
			<th>Actions</th>
	</tr>
	<?php foreach ($employees as $employee): ?>

	<? 
	
	if(isset($employee['Employeemetum'][0])) $fName = $employee['Employeemetum'][0]['name'];
	else $fName = "--Not Available--";
 	?>

	<tr>
		<td><?  echo $count++; ?> </td>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['name']); ?>&nbsp;</td>
		<td><?php echo h($fName); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['Union']['name'], array('controller' => 'unions', 'action' => 'view', $employee['Union']['id'])); ?>
		</td>
		<?  
		$status = (int)$employee['Employee']['isActive'];

		if($status==1) $status = "Active";
		elseif($status==0) $status = "Inactive";
		?>
		<td><?php echo h($status); ?>&nbsp;</td>
		<td>
			<a href="<? echo $this->Html->url(array(
    "controller" => "employees",
    "action" => "info", $employee['Employee']['id']
//    "?" => array("foo" => "bar")
)); ?>
<? //echo $employee['Employee']['id'];?>" type="button" class="btn btn-info">Detail</a>
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

<?
} //condition ends : whether there are 0 employees
else{
	?>
	<p class="bg-info">No Employees found under <span class="highlight uppercase"><? echo $unionName; ?></span>. </p>
	<?
}
?>