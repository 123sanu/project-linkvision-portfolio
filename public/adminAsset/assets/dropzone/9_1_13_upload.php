<?php

$ds          = DIRECTORY_SEPARATOR;  //1
$storeFolder = '../../orders/';   //2
$filename=$_GET['order_id'].'.jpg';

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3             

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
    
	$org_name=$_FILES['file']['name'];
    $last = array_pop( explode('.',$org_name) );
	
	$filename=$_GET['order_id'].'.'.$last;

    $targetFile =  $targetPath.$filename;  //5
 
	if (file_exists($targetFile))
	{
	session_start();
	if(isset($_SESSION['file_count']))
		{
		$count=$_SESSION['file_count'];
		$_SESSION['file_count']=$_SESSION['file_count']+1;
		}
		else
		{
		$_SESSION['file_count']=1;
		}
	$filename=$_GET['order_id'].'_'.$_SESSION['file_count'].'.'.$last;
    $targetFile =  $targetPath.$filename;	
	}
	
	
    move_uploaded_file($tempFile,$targetFile); //6
}



?> 