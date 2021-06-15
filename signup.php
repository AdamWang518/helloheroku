<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");
include("database.php");
$userName = $_GET["userName"];
$password = $_GET["password"];
$sql = $conn->prepare("INSERT INTO `users` ( `username`, `password`) VALUES ('$userName', '$password');");
    if($sql->execute()){
        $json = Array(
            "HttpCode" => 200,
            "message" => "success"
        );   
        echo json_encode($json); 
    } else {
        $json = Array(
            "HttpCode" => 500,
            "message" => "failure",
        );   
        echo json_encode($json); 
    }
?>