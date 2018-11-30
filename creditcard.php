<?php
session_start();
if(isset($_POST['film']))
{
	$film = explode("_",$_POST['film']);
	$film_id = $film[0];
	$film_time = $_POST['time'];
	$film_total_seats = $film[1];
	$reserved_seats = $_POST['seats'];
	$available_seats = $film_total_seats - $reserved_seats;
	$_SESSION['film_id'] = $film_id;
	$_SESSION['seats_number'] = $reserved_seats;
	$_SESSION['film_time'] = $film_time;
	$_SESSION['available_seats'] = $available_seats;
	
}
else {
	echo 'noo';
}
	
  echo '
	<html >
		<head>
			<title>Payment</title>
			<link rel="stylesheet" href="css/cstyle.css">
			
		</head>
		<body>
			<form action = "ticket.php" method="post" id="form1" onsubmit="checkdate(this);">
				<div class="form-container">
				   <div class="personal-information" >
					 <h1>Payment Information</h1>
				   </div>
						<input id="column-left" type="text" name="first-name" placeholder="First Name" required/>
						<input id="column-right" type="text" name="last-name" placeholder="Surname" required/>
						<input id="input-field" type="text" name="number" placeholder="Card Number" required/>
						<input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
						<input id="column-right" type="text" name="cvc" placeholder="CCV"/>
						<input id="input-button" type="submit" value="Submit" />
				  </div>    
				</form>      
		</body>
</html>';
?>