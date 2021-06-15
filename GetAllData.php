<?php
include("database.php");

$sql = $conn->prepare("SELECT * FROM `allmusic`");

            
    if($sql->execute()){
    	
		
	foreach($sql as $row){
		$responsedata[]=Array(
			"AllMusic_id" => $row['AllMusic_id'],
			"AllMusic_name" => $row['AllMusic_name']        
		);
				
		$json = Array(
			"HttpCode" => 200,
			"message" => "success",
			"data" => array(),
		);    
    }
    	$json['data']=$responsedata;
    	echo json_encode($json);
       
    }
?>