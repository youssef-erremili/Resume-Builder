<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "errehubdb";
    $conToserver = new mysqli($server, $username, $password, $dbname);
    if($conToserver->connect_error){
        die("could not connect to the server". $conToserver->connect_error);
    }