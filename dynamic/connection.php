<?php

    $serverName="localhost";
    $userName="suresh";
    $password="suresh123";
    $databaseName="blog";

    $conn=mysqli_connect($serverName,$userName,$password,$databaseName);

    if(mysqli_connect_error()){
        echo "connection is not established";
        exit();
    }
   // echo "Connection established sucessfully...!";