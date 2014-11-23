<option >Select a Upazilla</option>
<?

	if(!empty($accounts)){
		foreach($accounts as $account){
			if(!empty($Upazillas)){
				foreach($Upazillas as $Upazilla){
					if((int)$Upazilla['Upazilla']['id'] == $account['Account']['refId']) {
						$UpazillaName = $Upazilla['Upazilla']['name'];
						$tId = $account['Account']['id'];
						echo "<option value='$tId'>";
						echo $UpazillaName;
						echo "</option>";	
					}	
				}	
			}
		}
	}
?>
<pre>

</pre>
