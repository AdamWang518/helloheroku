<?php
include("database.php");
$music = $_POST['musicname'];

$sql = $conn->prepare("SELECT *  FROM `allmusic` where AllMusic_name LIKE '%$music%'");
    if($sql->execute()){
		$count = $sql->rowCount();
		if($count>0)
		{
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
		else{
			echo "null";
		}
		
       
    }

?>