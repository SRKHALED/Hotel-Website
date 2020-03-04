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
    width: 50%;
	length: 50%;
    border: 1px solid white;
	text-align:left;
	background-image:url(boat.png);
	}
	.column{
	float : left;
	width: 50%;
	}
	.input-submit {
	border: 0;
	cursor: pointer;
	background-color :#ddd;
}
.ci{
background-color:red;
box-shadow: 0 9px #999;
	border: none;
  border-radius: 18px;
  font-size: 16px;
  padding: 8px 16px;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
.cp{
background-color:green;
box-shadow: 0 9px #999;
	border: none;
  border-radius: 18px;
  font-size: 16px;
  padding: 8px 16px;
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
$sql="INSERT INTO user_information (name, email,address,country,mobile,type_of_room,check_in_date, check_out_date,number_of_room,number_of_person)
VALUES('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[country]','$_POST[mobile]','$_POST[type_of_room]','$_POST[check_in_date]','$_POST[check_out_date]','$_POST[number_of_room]','$_POST[number_of_person]')";

$check_in_date = $_POST["check_in_date"];
$check_out_date = $_POST["check_out_date"];
$date1Timestamp = strtotime($check_in_date);
$date2Timestamp = strtotime($check_out_date);
$difference = ($date2Timestamp - $date1Timestamp)/(24*60*60);

if(($conn->query($sql)===true)&&($_POST["name"]&&$_POST["email"]&&$_POST["address"]&&$_POST["country"]&&$_POST["mobile"]&&$_POST["type_of_room"]&&$_POST["check_in_date"]&&$_POST["check_out_date"]&&$_POST["number_of_room"]&&$_POST["number_of_person"])){
$k=$_POST["type_of_room"];
$sql2= "SELECT available_room FROM `rooms` WHERE type_of_room = '$k' ";
$result = $conn->query($sql2);
while($row = $result->fetch_assoc()) {
$avr = $row["available_room"];
}
if(($avr>$_POST["number_of_room"])&&$difference>0 && (filter_var($_POST["email"]))){
echo "<h2>"."<b>"."Review Your Booking Information "."</b>"."</h2>";
echo "<br />";
echo "<div class='row'>"."<div class='column'>"."<b>"."Name : "."</b>".validate($_POST["name"])."<br />"."<br />";
echo "<b>"."E-mail : "."</b>".validate($_POST["email"])."<br />"."<br />";
echo "<b>"."Address : "."</b>".validate($_POST["address"])."<br />"."<br />";
echo "<b>"."Country : "."</b>".validate($_POST["country"])."<br />"."<br />";
echo "<b>"."Cell : "."</b>".validate($_POST["mobile"])."<br />"."<br />"."</div>";
echo "<div class='column'>"."<b>"." Room Type: "."</b>".validate($_POST["type_of_room"])."<br />"."<br />";
echo "<b>"." Check in Date: "."</b>".validate($_POST["check_in_date"])."<br />"."<br />";
echo "<b>"." Check Out Date: "."</b>".validate($_POST["check_out_date"])."<br />"."<br />";
echo "<b>"." Number of room : "."</b>".validate($_POST["number_of_room"])."<br />"."<br />";
echo "<b>"." Number of person: "."</b>".validate($_POST["number_of_person"])."<br />"."</div>"."</div>"."<br />";
echo "<a href='reservation.php'>"."<button class='ci'>"."Change Info"."</button>"."</a>";
echo "<a href='pay2.php'>"."<button class='cp'>"."Confirm & Pay"."</button>"."</a>";
 
 $l=$avr-$_POST["number_of_room"];
$sql3= "UPDATE rooms SET available_room ='$l' WHERE type_of_room = '$k'";
$result = $conn->query($sql3);
}
else if($difference<=0)
{
echo "Invalid Check in & Check out date "."<br/>";
echo "<a href='reservation.php'>"."<button class='ci'>"."Change Date"."</button>"."</a>";
}
elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
	echo "E-mail format is not valid";
	echo "<a href='reservation.php'>"."<button class='ci'>"."Change E-mail"."</button>"."</a>";
}
else
{
echo "Sorry! This Type of Rooms are not Available"."<br/>";
echo "<a href='reservation.php'>"."<button class='ci'>"."Change room"."</button>"."</a>";
}
}
else
{
echo "Fill up all the information please"."<br/>";
echo "<a href='reservation.php'>"."<button class='ci'>"."Change Info"."</button>"."</a>";
}

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	};
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
