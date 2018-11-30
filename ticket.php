<?php
	session_start();
	include('config.php');
	$email = $_SESSION['email'];
	$film_id = $_SESSION['film_id'];
	$seats_number = $_SESSION['seats_number'];
	$film_time = $_SESSION['film_time'];
	$available_seats = $_SESSION['available_seats'];
	$sql = "insert into `reservation`VALUES('$email','$film_id','$seats_number','$film_time')";
    $query = mysqli_query($connection,$sql);
    if ($query){
		echo "<p style=' margin-top: 300px;text-align: center;font-size: 17px;'>
				Reservation completed successfully
			   </p>";
		echo "
			<table style='height: 100;text-align: center;font-size: 17px;margin:auto;' border=2px >
				<tr>
					<td> Email</td>
					<td> $email</td>
				</tr>
				<tr>
					<td>Seats</td>
					<td>$seats_number </td>
				</tr>
				<tr>
					<td>Time </td>
					<td>  $film_time</td>
				</tr>
			</table>";
		$sql = "update films set seats = '$available_seats' where id=$film_id";
		$query = mysqli_query($connection,$sql);
	}else{
		echo "failed";
	}
	
	function updateFilmSeats(){
		
	}

?>