<option >Select a Union </option>
<?
	foreach($Unions as $Union){
		$tId = $Union['Union']['id'];
		echo "<option value='$tId'>";
		echo $Union['Union']['name'];
		echo "</option>";
	}
?>
