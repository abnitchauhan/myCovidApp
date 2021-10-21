<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>my Covid App Data</title>
</head>
<body>


<!-- Select Section -->
<div class="selectSection">
	<h2>Select State to Get the Data</h2>

	<br/>
	
	<?php 
		$states = ["India","Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh", "Chhattisgarh","Dadra and Nagar Haveli and Daman and Diu","Delhi","Goa","Gujarat","Haryana", "Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Ladakh","Lakshadweep", 
    "Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Puducherry", "Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand", "West Bengal"];
	?>

	<select name="state" id="stateSelection">
		<?php 

		foreach ($states as $state) {
		?>
		<option value="<?php echo $state ; ?>"><?php echo $state ; ?></option>
		<?php
		}
		?> 
	</select>
</div>


<!-- Data Section --> 
<div class="dataSection">
 
 

</div>

<!-- 3x minified-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="scripts/custom.js"></script>
 

</body>
</html>