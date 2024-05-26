<?php
$host = "localhost";
$admin = "root";
$password = "";
$databaseName = "resume-builder";

try {
    $serverConnection = new PDO("mysql:host = $host; dbname=$databaseName", $admin, $password);
    $serverConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($serverConnection) {
        echo "<script> 
                console.log(\"Connection Has Been Established Successfully\")
            </script>";
    }
} catch (PDOException $th) {
    echo "connection failed" . $th->getMessage();
    echo "<script> 
            console.error(\"Connection Has Not Been Established Successfully\")
        </script>";
}
