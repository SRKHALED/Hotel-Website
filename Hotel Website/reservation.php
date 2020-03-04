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
		background-size : 1500px 800px;
		
	}
	
	h3{
	color:black;
	font-size: 40px;
	}
	fieldset{
	float : center;
    width: 50%;
	length: 50%;
    border: 1px solid white;
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
	h6{
	color:;
	font-size: 15px;
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
<a href="aboutUs.html"><button class="btn default">About Us</button></a><br/>

</header>
	<h1>Reservation & Payment</h1>
		<center>
		<div class="container">
		<form action ="ins.php"method="post">
		<fieldset>
		<div class="row">
		<strong> Give your information </strong><br />
		  
              
		<div class="column">
			 Name :<br />
			<input type="text" name="name" required="required"/>
			<br /> <br/>
			Email :<br />
			<input type="text" name="email" required="required"/>
			<br /> <br/>
			Address :<br />
			<input type="text" name="address" required="required"/>
			<br /> <br/>
			Country :<br />
			<input type="text" name="country" required="required"/>
			<br /> <br/>
			Mobile :<br />
			<input type="text"name="mobile" required="required"/>
			<br /><br />
			</div>
			<div class="column">
			Type of room :<br />
			<select name ="type_of_room" required="required">
				<option value="Presidential Suite" >Presidential Suite</option>
				<option value="Family Suite" >Family Suite</option>
				<option value="Standard Double Room"  >Standard Double Room</option>
				<option value="Standard Single Room"  >Standard Single Room</option>
			</select>
			<br /><br />
			Number of room :<br />
			<input type="text"name="number_of_room" required="required"/>
			<br /><br />
			Number of person :<br / >
			<input type="text"name="number_of_person" required="required"/>
			<br /><br />
			Check-in-date :<br />
			<input type="text"name ="check_in_date"required="required"/>
			<br /> <br/>
			Check-out-date :<br />
			<input type="text"name ="check_out_date"required="required"/>
			<br /> <br/>
			<input type="submit"name="Submit" value="BOOK NOW!" background-color :#ddd;/>
			</div>
			</center>
			</div>
		</fieldset>
			<br />
		</form>
			<br />
		<footer>
	<h6>Hotel Sylhet Star <br>
	Amborkhana, Sylhet, Bangladesh <br />
	<i class="fa fa-phone"></i>(+88) 01741618005, 01673698773 <br/>
	<i class="fa fa-envelope-o"></i>info@hotelsylhetstar.com<br/>
	<?php echo date("d-m-Y");?>
	</h6>
	</footer>
		</div>
		
	</body>
</html>