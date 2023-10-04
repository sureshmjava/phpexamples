<?php

    $serverName="localhost";
    $userName="suresh";
    $password="suresh@123";
    $databaseName="test";

    $conn=mysqli_connect($serverName,$userName,$password,$databaseName);

    if(mysqli_connect_error()){
        echo "connection is not established";
        exit();
    }
    echo "Coneection sucessfully established";

?>