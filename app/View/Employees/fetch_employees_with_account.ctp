<option >Select a Employee</option>
<?

	if(!empty($accounts)){
		foreach($accounts as $account){
			if(!empty($Employees)){
				foreach($Employees as $Employee){
					if((int)$Employee['Employee']['id'] == $account['Account']['refId']) {
						$EmployeeName = $Employee['Employee']['name'];
						$tId = $account['Account']['id'];
						echo "<option value='$tId'>";
						echo $EmployeeName;
						echo "</option>";
					}	
				}	
			}
		}
	}
?>
