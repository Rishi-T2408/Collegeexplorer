<!DOCTYPE HTML>

<html  lang="en-US">
	<head>
		<title>CUTOFF RANK</title>
		<link rel = "icon" href ="images/icon.jpg" type = "image/x-icon"> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
	 <style>
	 @media (max-width: 575.98px) {
	      #RoundNos,#Quotas,#Categorys {
	         margin-left:10% !important;
	         margin-bottom:10px !important;
	     }
	     #SeatPools{
	         margin-left:2% !important;
	         padding-left:10% !important;
	     }
	     .subbtn{
            margin-top:10px;
	       margin-left:60px !important;  
	     }
	      table{
	         margin-left:0px !important;
	     }
          p{
            margin-right:20%; !important;
           margin-top:30px;
           background-color:white;
           background-color:rgba(255,255,255,0.4);
           width:80% !important;
           height:auto;
           color:red;
           padding-left:20px;
           font-weight:bold;
          
         }

	 }
	 #forms {
	     margin-left:20%;
	     margin-top:50px;
	 }
	     .cutofftable {
	         border=2;
	         width:80%;
	         margin-left:10%;
	         margin-top:50px;
	         
	     }
	     #RoundNos,#Quotas,#Categorys,#SeatPools {
	          margin-left:0px;
	     }
	     #button{
	         margin-left:-5% !important;
	     }
	     .placehold{
            display:none;
	     }
	     .subbtn{
            margin-top:10px;
	       margin-left:30%;  
	     }
         p{
           margin-top:30px;
           background-color:rgba(255,255,255,0.4);
           width:60%;
           height:auto;
           color:red;
           padding-left:20px;
           font-weight:bold;
         }
	 </style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">College <span style="color:rgb(9, 129, 209);">Explorer</a></span>
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
				<h1>CUTOFF-JOSAA</h1>
			</div>



             <div class="table-responsive-sm">
			<table class="cutofftable table" >
			    <thread class="thead-dark">
<tr>
     <th>Round No</th>
    <th>Institute</th>
    <th>Academic Program Name</th>
    <th>Quota</th>
    <th>Category</th>
    <th>Seat Pool</th>
    <th>Opening Rank</th>
    <th>Closing Rank</th>
</tr>
              </thread>
<div id="forms" >
<form action="" method="POST" >
  <select class="btn btn-primary btn-lg col-6 col-md-2" id="RoundNos" name="RoundNos">
    <option selected="selected" class="placehold">Round No</option>
    <option value="1">Round 1</option>
    <option value="2">Round 2</option>
    <option value="3">Round 3</option>
    <option value="4">Round 4</option>
    <option value="5">Round 5</option>
    <option value="6">Round 6</option>
    <option value="7">Round 7</option>

  </select>
<select class="btn btn-primary btn-lg col-6 col-md-2" id="Quotas" name="Quotas">
    <option selected="selected" class="placehold">Quota</option>
    <option value="OS">Other State</option>
    <option value="HS">Home State</option>
     <option value="AP">Andhra Pradesh</option>
 

  </select>

 <select class="btn btn-primary btn-lg col-6 col-md-2" id="Categorys" name="Categorys">
     <option selected="selected" class="placehold">Category</option>
    <option value="OPEN">OPEN</option>
    <option value="GEN-EWS">GEN-EWS</option>
    <option value="OBC-NCL">OBC-NCL</option>
    <option value="SC">SC</option>
    <option value="ST">ST</option>
      <option value="OPEN (PwD)">OPEN (PwD)</option>
    <option value="GEN-EWS(PwD)">GEN-EWS(PwD)</option>
    <option value="OBC-NCL(PwD)">OBC-NCL(PwD)</option>
    <option value="SC PwD">SC PwD</option>
    <option value="ST PwD">ST PwD</option>

  </select>
  <select class="btn btn-primary btn-lg col-8 col-md-2" id="SeatPools" name="SeatPools">
      <option selected="selected" class="placehold">Seat Pool</option>
    <option value="Gender-Neutral">Gender-Neutral</option>
    <option value="Female-Only">Female-Only</option>

  </select>
<br>

<input type="submit"  name="search" class="btn btn-primary btn-lg subbtn" >

</form>


<?php
$servername = "sql213.byethost.com";
$username = "b13_26351573";
$password = "9771303458";
$dbname = "b13_26351573_database1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['search']))
{
    $RoundNo = $_POST['RoundNos'];
    $Institute = $_GET["Institutes"];
    $Quota = $_POST['Quotas'];
    $Category = $_POST['Categorys'];
    $SeatPool = $_POST['SeatPools'];
  $query ="SELECT * FROM table1 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' UNION ALL SELECT * FROM table2 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' UNION ALL SELECT * FROM table3 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' UNION ALL SELECT * FROM table4 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' UNION ALL SELECT * FROM table5 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' UNION ALL SELECT * FROM table6 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' UNION ALL SELECT * FROM table7 WHERE RoundNo='$RoundNo' AND Institute='$Institute' AND Quota='$Quota' AND Category='$Category' AND SeatPool='$SeatPool' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result =mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
         <td>".$result['RoundNo']."</td>
        <td>".$result['Institute']."</td>
        <td>".$result['AcademicProgramName']."</td>
        <td>".$result['Quota']."</td>
        <td>".$result['Category']."</td>
        <td>".$result['SeatPool']."</td>
        <td>".$result['OpeningRank']."</td>
        <td>".$result['ClosingRank']."</td>
        <tr>
        ";
    }
}
else
{
   echo "<p>No Records Found!. The Seats might have been completely filled for <br> Round No: ".$RoundNo." <br>Category: ".$Category." <br>SeatPool: ".$SeatPool." before this Round. Kindly Check Earlier Rounds.<p>";
}
}
?>
</table>
</div>
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