<?php
	session_start();
    include("../../config/connectdb.php");
	$branchid = $_SESSION['branchid'];
    $groupName = $_GET['name'];
    $add_group = "INSERT into groups (group_name, branchid) values('$groupName', '$branchid')";

    $result = mysqli_query($con, $add_group);

	if($result){
		$apiResult = array(
			'statusCode' => '200',
			'message' => 'Group Added'
			);
	}else{
	 	$apiResult = array(
			'statusCode' => '400',
			'message' => 'group not added'
			);
	}
	
	echo json_encode($apiResult);
    
?>