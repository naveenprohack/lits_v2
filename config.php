<?php 
define('HOST','localhost:3306');
define('DBUSER','logesh');
define('DBPASSWORD','Logesh@2001');
define('DB','stu_details');





$con =mysqli_connect(HOST,DBUSER,DBPASSWORD,DB);
if($con->connect_errno)
{
    echo 'database connection error';
}
 ?>
