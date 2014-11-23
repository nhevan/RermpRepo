<option >Select a Upazilla </option>
<?
	foreach($Upazillas as $Upazilla){
		$tId = $Upazilla['Upazilla']['id'];
		echo "<option value='$tId'>";
		echo $Upazilla['Upazilla']['name'];
		echo "</option>";
	}
?>
