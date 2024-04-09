<?php

 $dbservername = "localhost"; //database servername
 $dbusername = "root"; //database username
 $dbpassword = ""; //database password
 $dbname = "ffc"; //database name

 $con = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname, '3308');

    if (!$con) {
    	echo "problem in database connection";
    	exit();
    } /*else {
    	echo "database connected succesfully";
    }*/
    
 