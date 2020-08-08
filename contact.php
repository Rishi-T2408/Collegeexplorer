<?php
$name = $_GET['name'];
$email =$_GET['email'];
$number =$_GET['number'];
$message =$_GET['message'];

if(empty($message))
{
    echo "Message Empty";
}
else
{
    $dbhost = "sql213.byethost.com";

    $dbuser = "b13_26351573";

    $dbpass = "9771303458";

    $dbname = "b13_26351573_database1";

    $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql="INSERT INTO userdata (Name,Email,Number,Message) VALUES ('$name','$email','$number','$message')";

    if (!mysqli_query($con,$sql))
      {
      die('Error: ' . mysqli_error($con));
      }
    echo "<script type='text/javascript'>alert('Query Submitted. We Will Reach Out To You Soon');window.location.replace('http://collegeexplorer.byethost13.com/');</script>";
}
?>