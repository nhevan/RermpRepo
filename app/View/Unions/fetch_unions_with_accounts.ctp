<option >Select a Union</option>
<?

	if(!empty($accounts)){
		foreach($accounts as $account){
			if(!empty($Unions)){
				foreach($Unions as $Union){
					if((int)$Union['Union']['id'] == $account['Account']['refId']) {
						$UnionName = $Union['Union']['name'];
						$tId = $account['Account']['id'];
						echo "<option value='$tId'>";
						echo $UnionName;
						echo "</option>";	
					}	
				}	
			}
		}
	}
?>
