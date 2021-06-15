<?php
include("database.php");
if(isset( $_FILES['file']))
{
	$fileName = $_FILES['file']['name'];
	$ext = strrchr($fileName, '.'); //取得副檔名 

	$arr_ext = array('.avi','.rmvb','.3gp','.flv','.mp3','.wav','.krc','.lrc','.mp4','.wmv');    //設定允許上傳的副檔名 
	if(in_array($ext, $arr_ext)){
		
		
	   //移動檔案到指定目錄
	   move_uploaded_file($_FILES['file']['tmp_name'],iconv("UTF-8", "big5","../music/".$fileName ));
	   //取得主要檔案名稱
	   $main = substr($fileName,0,strrpos($fileName,'.'));   
	   //寫進資料庫
	   $sql = $conn->prepare("INSERT INTO `allmusic`( `AllMusic_name`) VALUES ('$main')");
	
	   if( $sql->execute() ){
	    echo "上傳成功!";
	   }
	   else{
		echo "檔案上傳失敗";   
	   }
	
	}
	else{
	  echo "該副檔名不允許上傳";
	}
	
}
else{
	
	echo "Not Found";
}
?>