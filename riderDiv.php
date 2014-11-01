<div id="bottom">
	Rider Home Page
	<form action = 'RiderEt.php' method = 'POST' name = 'riderEvent'>
		Location From: <input type='text' name = 'locFrom'/>
		Location To: <input type='text' name = 'locTo'/>
		Time From: <input type='text' name = 'timeFrom'/>
		Time To: <input type='text' name = 'timeTo'/>
		<input type='submit' value = 'Submit'/>
		<?php
		if (isset($_GET['RiderRequest']) && $_GET['RiderRequest'] == 1)	
		{   
			echo '<span style="color: red;">New Request Created Successfully</span><br/>';
		}
		else if(isset($_GET['RiderRequest']) && $_GET['RiderRequest'] == 0)
		{
			echo '<span style="color: red;">Request Creation Failure</span><br/>';
		}
		?>
	</form>
</div>

