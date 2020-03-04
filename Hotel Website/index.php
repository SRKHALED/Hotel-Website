<?php
$bgcolor="#444" ;
?>
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

header, footer {
    padding: 1em;
    color: White;
    background-image:url(h1.jpg);
    clear: left;
    text-align: center;
	width: 98%;
	overflow:hidden;
}


article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
	color:black;
	font-size:16px;
	font-family: "Comic Sans MS", cursive, sans-serif;
	
}
body{
		background-color :;
		background-image:url(boat.png);
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
	div.ctnr{
		  width: 100%;
	background-image:url(boat.png);
	}
	
	
</style>
</head>
<body>
​
<div class="ctnr" >
<header>
   <h1> Hotel Sylhet Star  </h1>
   
<a href="index.php"><button class="btn success" action="index1.php">Home</button></a>
<a href="roomQuality.html"><button class="btn info">Rooms & Suites</button></a>
<a href="reservation.php"><button class="btn warning">Reservation & Payment</button></a>
<a href="restaurant.html"><button class="btn danger">Restaurant</button></a>
<a href="aboutUs.html"><button class="btn default">About Us</button></a>

​
</header>
  
​
<article>
  <h2>Welcome to Hotel Sylhet Star</h2>	
<p>
Hotel Sylhet Star welcomes you to enjoy comfort and luxury, a place where you will find exceptional five star facilities and world class hospitality.
<br><br>
The Hotel features 140 fully equipped deluxe and suite rooms, an extensive array of restaurant outlets catering for international and local palates, <br />
fully equipped fitness centre, sauna and steam, authentic Thai Spa, heated roof top swimming pool, the only fully stocked licensed bar in the City <br />and a full range of meeting and event facilities ideal for business and private gatherings for up to 1000 people. 
<br><br>
 Conveniently and centrally located from the shopping and business districts, served by Osmani International Airport, national train networks and accessible via the main road links connecting the city to Dhaka, Hotel sylhet star combines style, warmth and convenience with a dash of creativity to deliver an experience that is like no other.
</p>

</article><br/>
​
    <footer>
	<h6>Hotel Sylhet Star <br>
	Amborkhana, Sylhet, Bangladesh <br />
	<i class="fa fa-phone"></i>(+88) 01741618005, 01673698773 <br/>
	<i class="fa fa-envelope-o"></i>info@hotelsylhetstar.com<br/>
	<?php echo date("d-m-Y");?>
	</h6>
	</footer>
​
</div>

</body>
</html>
​