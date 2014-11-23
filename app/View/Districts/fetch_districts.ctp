<option >Select a District </option>
<?
	foreach($Districts as $District){
		$tId = $District['District']['id'];
		echo "<option value='$tId'>";
		echo $District['District']['name'];
		echo "</option>";
	}
?>
