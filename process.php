<?php 

// HashMap the PostField to the State Code.  
	$stateMap = array("India"=>"TT",
			 "Andaman and Nicobar Islands"=>"AN",
			 "Andhra Pradesh" => "AP",
			 "Arunachal Pradesh" => "AR",
			 "Assam" => "AS",
			 "Bihar" => "BR",
			 "Chandigarh" => "CH",
			 "Chhattisgarh" => "CT",
			 "Dadra and Nagar Haveli and Daman and Diu" => "DN",
			 "Delhi" => "DL",
			 "Goa" => "GA",
			 "Gujarat" => "GJ",
			 "Haryana" => "HR", 
			 "Himachal Pradesh" => "HP",
			 "Jammu and Kashmir" => "JK",
			 "Jharkhand" => "JH",
			 "Karnataka" => "KA",
			 "Kerala" => "KL",
			 "Ladakh" => "LA",
			 "Lakshadweep" => "LD", 
		     "Madhya Pradesh" => "MP",
		     "Maharashtra" => "MH",
		     "Manipur" => "MN",
		     "Meghalaya" => "ML",
		     "Mizoram" => "MZ",
		     "Nagaland" => "NL",
		     "Odisha" => "OR",
		     "Puducherry" => "PY", 
		     "Punjab" => "PB",
		     "Rajasthan" => "RJ",
		     "Sikkim" => "SK",
		     "Tamil Nadu" => "TG",
		     "Telangana" => "TN",
		     "Tripura" => "TR",
		     "Uttar Pradesh" => "UP",
		     "Uttarakhand" => "UT", 
		     "West Bengal" => "WB") ;//Once Created


if($_SERVER['REQUEST_METHOD'] == "POST")
{
 	$state = $_POST['sendState'];  //Get State from javascript POST request
	$readData = file_get_contents('data/app.json'); //Read JSON data
	$decodedData = json_decode($readData, true); //Decode JSON Data into an array
 	 
 	$iso_state = $stateMap[$state]; // Map the Input State to the State code.

	foreach($decodedData[$iso_state]['dates'] as $state_data_key => $state_data_value)
		{	
			// $cases_combined[] = [$state_data_key, $state_data_value['total']]; //Different date and Data Array
			$date = ["date" => $state_data_key]; 
			$cases = $state_data_value['total']; 
			$cases_combined[] = array_merge($date, $cases); 
		} 

	 	echo json_encode($cases_combined);

	 
}

?>	