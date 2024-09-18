<?php

mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);


    $database= new mysqli("localhost","root","","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>