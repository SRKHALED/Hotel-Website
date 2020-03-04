<!DOCTYPE html>
<html>
<head>
		<title> Hotel Sylhet Star </title>
		<style>
	.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.success {background-color: #4CAF50;} 
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} 
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} 
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} 

.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} 
.default:hover {background: #ddd;}

header{
    padding: 1em;
    color: White;
    background-image:url(h1.jpg);
    clear: left;
    text-align: center;
}
footer {
    padding: 1em;
    color:white;
	background-image:url(h1.jpg);
    clear: left;
    text-align: center;
}
	body{
		background-image : url("im1.jpg");
		background-size : 1500px 650px;
		
	}
	
	h3{
	color:black;
	font-size: 40px;
	}
	h2{
	text-align:center;
	}
	fieldset{
	float : center;
    width: 60%;
	length: 50%;
    border: 1px solid white;
	text-align:left;
	font-family: "Comic Sans MS", cursive, sans-serif;
	background-image:url(boat.png);
	}
	.column{
	float : left;
	width: 50%;
	}
	h1{
	font-family: "Comic Sans MS", cursive, sans-serif;
	}
	</style>
	</head>
<body>
<header>
   <h1> Hotel Sylhet Star  </h1>
   
<a href="index.php"><button class="btn success" action="index1.php">Home</button></a>
<a href="roomQuality.html"><button class="btn info">Rooms & Suites</button></a>
<a href="reservation.php"><button class="btn warning">Reservation & Payment</button></a>
<a href="restaurant.html"><button class="btn danger">Restaurant</button></a>
<a href="aboutUs.html"><button class="btn default">About Us</button></a>
</header>
<center>
<br />
<br />
<fieldset>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed : ".$conn->connect_error);
}
$sql= "SELECT * FROM `user_information` NATURAL JOIN `reserv` WHERE user_id = (SELECT max(user_id)FROM `user_information`) and is_booked ='no'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
		$id = $row["user_id"];
		$name = $row["name"];
		$email = $row["email"];
		$address = $row["address"]; 
		$country = $row["country"];
		$mobile = $row["mobile"];
		$type_of_room = $row["type_of_room"];
        $number_of_room = $row["number_of_room"];
		$number_of_person = $row["number_of_person"];
		$check_in_date = $row["check_in_date"];
		$check_out_date = $row["check_out_date"];
		$room_id = $row["room_id"];
		}
		}
		else {
			echo "0 results";
		}
echo "<h2>"."<b>"."Your Booking Information "."</b>"."</h2>";
echo "<br />";
echo "<div class='row'>"."<div class='column'>"."<b>"."User ID : "."</b>".$id."<br />"."<br />";
if($number_of_room>1)
{
	echo "<b>"."Room NO: "."</b>";
	for($i=0; $i<$number_of_room; $i++){
	if($i==($number_of_room-1))
		{echo $room_id;}
	else
	{echo $room_id.",";}
	$sql3= "UPDATE reserv SET is_booked ='yes' WHERE room_id = '$room_id'";
	$result = $conn->query($sql3);
		$room_id--;
	}
}
else{
	echo "<b>"."Room NO: "."</b>".$room_id;
	$sql3= "UPDATE reserv SET is_booked ='yes' WHERE room_id = '$room_id'";
	$result = $conn->query($sql3);
	}
echo "<br />"."<br />"."<b>"."Name : "."</b>".$name."<br />"."<br />";
echo "<b>"."E-mail : "."</b>".$email."<br />"."<br />";
echo "<b>"."Address : "."</b>".$address.",".$country."<br />"."<br />";
echo "<b>"."Cell : "."</b>".$mobile."<br />"."<br />"."</div>";
echo "<div class='column'>"."<b>"." Room Type: "."</b>".$type_of_room."<br />"."<br />";
echo "<b>"." Check in Date: "."</b>".$check_in_date."<br />"."<br />";
echo "<b>"." Check Out Date: "."</b>".$check_out_date."<br />"."<br />";
echo "<b>"." Number of room : "."</b>".$number_of_room."<br />"."<br />";
echo "<b>"." Number of person: "."</b>".$number_of_person."<br />"."<br />";
$conn->close();
?>
<br />
</fieldset>
</center>
<br/><br/>
<footer>
	<p al>Hotel Sylhet Star <br>
	Amborkhana, Sylhet, Bangladesh <br />
	<i class="fa fa-phone"></i>(+88) 01741618005, 01673698773 <br>
	<i class="fa fa-envelope-o"></i>info@hotelsylhetstar.com
	</p>
	</footer>
</body>
</html>
