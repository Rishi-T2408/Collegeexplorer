<!DOCTYPE HTML>

<html  lang="en-US">
	<head>
		<title>CUTOFF RANK</title>
		<link rel = "icon" href ="images/icon.jpg" type = "image/x-icon"> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
@media (max-width:575.98px) {
#srch{
width:80% !important;
margin-left:10% !important;
    
}
h3 {
    margin-left:10% !important;
}
}
		    #srch{
		        display:block;
		        text-align:center;
		        text-decoration:none;
		        padding-top:10px;
		        color:black;
		         background-color:rgba(255,255,255,0.4);
		         width:60%;
		         margin-left:20%;
		         font-size:15px;
		         
		    }
		    #srch:hover{
		      color:white;
		      background-color:dodgerblue;
		      transform:scale(1.1);
		      width:54.7%;
		      margin-left:22.75%;
		    }
            h3 {
                font-size:25px;
                margin-top:50px;
                margin-left:20%;
                font-weight:bold;
                color:blue;
            }
		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">College <span style="color:rgb(9, 129, 209);">Explorer</span></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="IIT HOME1.html">IIT</a></li>
					<li><a href="NIT HOME1.html">NIT</a></li>
                    <li><a href="IIIT HOME1.html">IIIT</a></li>
                    <li> <a href="index.html#down">Downloads</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Search Results</h1>
			</div>
 

<?php
$servername = "sql213.byethost.com";
$username = "b13_26351573";
$password = "9771303458";
$dbname = "b13_26351573_database1";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_GET['k'];
  $query = "SELECT * FROM search WHERE keywords LIKE '%$name%' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if(empty($name))
{
    echo '<h3>No Results found. Try Re-entering a Valid Input</h3>';
}
else
{
    echo '<h3>Search Results For:'.$name.'</h3>';
    while($result =mysqli_fetch_assoc($data))
    {
    $pr = $result['links'];
    $inside = $result['colleges'];
    echo '<a id="srch" href="IIT NIT IIIT/'.$pr.'" >'.$inside.'</a>';
    }
}


?>
            
<!--Content-->

<!--Content Closes-->	




	

	
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>