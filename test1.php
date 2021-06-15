<?php

$db_host ="localhost";
$account ="root";
$password = "";
$database = "musicbox";

$dsn ="mysql:host=$db_host;dbname=$database;charset=utf8";
$conn = new PDO($dsn, $account, $password);


//query , prepare
$sql = $conn->prepare("SELECT AllMusic_id,AllMusic_name FROM allmusic");

 if($sql->execute()){
    	
	foreach($sql as $row){
					
				$json = Array(
					"HttpCode" => 200,
					"message" => "success",
					"data" => array(),
				); 

				$responsedata[]=Array(
					"AllMusic_id" => $row['AllMusic_id'],
					"AllMusic_name" => $row['AllMusic_name']        
				);
									
			}
			$json['data']=$responsedata;
			echo json_encode($json);
		
 }
?>




