<?php
    session_start();
    include("../../config/connectdb.php");
    //$branchid = $_SESSION['branchid'];
    $userId = $_GET['userId'];
    $groupId = $_GET['groupId'];
    $checkMember = "SELECT * from group_users  where user_id = '$userId'";
    $member_result = mysqli_query($con, $checkMember);

    if(mysqli_num_rows($member_result) > 0){
        $apiResult = array(
            'code' => 400,
            'message' => 'Already Added'
        );
    }
    else
    {
        $add_group_user = "INSERT into group_users (group_id, user_id) values ('$groupId','$userId')";

        $result = mysqli_query($con, $add_group_user);

        if($result){
            $apiResult = array(
                'code' => 200,
                'message' => 'added'
            );
        }
        else{
            $apiResult = array(
                'code' => 400,
                'message' => 'add error'
            );
        }
    }

    echo json_encode($apiResult);
?>