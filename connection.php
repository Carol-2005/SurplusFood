

<?php
//change mysqli_connect(host_name,username, password); 
$servername="localhost";
$username="root";
$password="";
$database="demo";
$connection = mysqli_connect($servername,$username,$password,$database);
if(!$connection)
{
   die("Sorry we failed".mysqli_connect_error());
}

?>
