<?php
$db_host='localhost';
$db_name='musicbox';
$db_user='root';
$db_pass='';
$dsn ="mysql:host=$db_host;dbname=$db_name;charset=utf8";
$conn = new PDO($dsn, $db_user, $db_pass);


$sql = $conn->prepare("SELECT * FROM `allmusic`");

            
    if($sql->execute()){
    	
    	foreach($sql as $row){
	        $responsedata[]=Array(
	        	"AllMusic_id" => $row['AllMusic_id'],
	            "AllMusic_name" => $row['AllMusic_name']        
	        );
	                
	        $cart = Array(
	            "HttpCode" => 200,
	            "message" => "success",
	            "data" => array(),
	        );    
    	}
    	$cart['data']=$responsedata;
    	echo json_encode($cart);
        
    }
?>