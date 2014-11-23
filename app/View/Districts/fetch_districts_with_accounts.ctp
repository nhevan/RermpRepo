<option >Select a District</option>
<?

	if(!empty($accounts)){
		foreach($accounts as $account){
			if(!empty($Districts)){
				foreach($Districts as $District){
					if((int)$District['District']['id'] == $account['Account']['refId']) {
						$DistrictName = $District['District']['name'];
						$tId = $account['Account']['id'];
						echo "<option value='$tId'>";
						echo $DistrictName;
						echo "</option>";	
					}	
				}	
			}
		}
	}
?>
<pre>

</pre>
