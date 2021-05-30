<title>Availabiity</title>
<?php
	$pin_code=$_POST['pin'];
	$date=$_POST['date'];
	$url="https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByPin?pincode=$pin_code&date=$date";
	$response=file_get_contents($url);
	$data=json_decode($response,true);
	$counter=0;
	echo "<h1 style='text-align:center;font-family: Arial, Helvetica, sans-serif;'>
		    Stay Safe Stay Home :)
		  </h1>";

	for($i=0 ; $i<sizeof($data['centers']) ; $i++){
		if($data['centers'][$i]["sessions"][0]["available_capacity"] > 0){
			$counter+=1;
			echo "<h3>Center name : ".$data['centers'][$i]["name"]."</h3>";
			echo "<h3>Available Capacity : ".$data['centers'][$i]["sessions"][$i]['available_capacity']."</h3>";
			echo "<h3>Timing : ".$data['centers'][$i]["from"]." to ".$data['centers'][$i]["to"]."</h3>";
			echo "<h3>Min age limit : ".$data['centers'][$i]["sessions"][0]['min_age_limit']."</h3>";
			}
		}

	if($counter == 0){
		echo ("<h3>No vaccine slots available</h3>");
	}
?>