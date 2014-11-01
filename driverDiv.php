<div id="bottom">
	Driver Home Page
	<form action = 'DriverEt.php' method = 'POST' name ='driverEvent'>
		Location From: <input type='text' name = 'locFrom'/>
		Location To: <input type='text' name = 'locTo'/>
		Time From: <input type='text' name = 'timeFrom'/>
		Time To: <input type='text' name = 'timeTo'/>
		Maximum Riders: <input type='text' name = 'maxRiders'/>
		<input type='submit' value = 'Submit'/>
	</form>
	<?php
	if (isset($_GET['DriverOffer']) && $_GET['DriverOffer'] == 1)
	{   
		echo '<span style="color: red;">New Offer Created Successfully</span><br/>';
	}
	else if(isset($_GET['DriverOffer']) && $_GET['DriverOffer'] == 0)
	{
		echo '<span style="color: red;">Offer Creation Failure</span><br/>';
	}
	?>
</div>
