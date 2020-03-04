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
	h1{
	color:;
	}
	fieldset{
	float : center;
    width: 60%;
	length: 50%;
    border: 1px solid white;
	text-align:left;
	background-image:url(boat.png);
	}
	.column{
	float : left;
	width: 50%;
	}
	h1{
	color:;
	font-family: "Comic Sans MS", cursive, sans-serif;
	text-align:center;
	}
	.submit{
	background-color:red;
	box-shadow: 0 9px #999;
	border: none;
    border-radius: 18px;
    font-size: 16px;
    padding: 4px 8px;
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
	<h1><strong> Bkash Payment Method </strong></h1>
		<center>
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
		$sql = "SELECT user_id,number_of_room,check_in_date,check_out_date,cost FROM `user_information` NATURAL JOIN `rooms` WHERE user_id = (SELECT max(user_id)FROM `user_information`)";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$id = $row["user_id"];
        $nunmber_of_room = $row["number_of_room"];
		$check_in_date = $row["check_in_date"];
		$check_out_date = $row["check_out_date"];
		$cost = $row["cost"];
		$date1Timestamp = strtotime($check_in_date);
		$date2Timestamp = strtotime($check_out_date);
		$difference = ($date2Timestamp - $date1Timestamp)/(24*60*60);
		$amount = $difference*$cost*$nunmber_of_room;
		}
		} else {
			echo "0 results";
		}
			echo "<div class='row'>"."<div class ='column'>"."Bkash Account : +8801741618005"."<br />"."<br />";
			echo "Amount        : ".$amount." BDT"."<br />"."<br />";
			echo "Reference     : ".$id."<br />"."<br />";
			echo "Counter No    : 01"."<br />"."<br />";
			echo "Transation ID :"."<input type='text' name='tid' />"."<br />";
			echo "<a href='final.php'>"."<button class='submit'>"."SUBMIT"."</button>"."</a>"."</div>";
			echo "<div class ='column'>"."<b>"."How To Make Pament Using Bkash Account"."</b>";
			echo"<p>"."STEP 1: Dial *247# "."<br />";
			echo "STEP 2: Choose Option : Payment Enter Merchant bKash"."<br />";
			echo "STEP 3: Account NO :+8801741618005"."<br />";
			echo "STEP 4: Amount  : ".$amount."<br />";
			echo "STEP 5: Enter Reference : ".$id."<br />";
			echo "STEP 6: Enter Counter No : 01 "."<br />";
			echo "STEP 7: Enter Your Pin  :****"."<br />";
			echo "STEP 8: Using Transaction ID to complete your transaction"."<br />"."</p>"."</div>"."</div>";
			$conn->close();
			?>
			</fieldset>
			</center>
			<br />
			<br />
		<footer>
	<p>Hotel Sylhet Star <br>
	Amborkhana, Sylhet, Bangladesh <br />
	<i class="fa fa-phone"></i>(+88) 01741618005, 01673698773 <br>
	<i class="fa fa-envelope-o"></i>info@hotelsylhetstar.com
	</p>
	</footer>
		</div>
		
	</body>
</html>