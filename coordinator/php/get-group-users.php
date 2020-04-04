<?php
    session_start();
    include("../../config/connectdb.php");

    $groupid = $_GET['groupid'];
    $get_group_users = "SELECT gu.groupUserId, gu.user_id, gu.group_id, u.firstname, u.lastname from group_users gu inner join users u on gu.user_id = u.userid where gu.group_id = '$groupid'";

    $result = mysqli_query($con, $get_group_users);
    $output = [];
	if(mysqli_num_rows($result) > 0){
        $i = 0;
        while($row = $result -> fetch_assoc())
        {
            $output[$i] = $row;
            $i++;
        }
    }
    echo json_encode($output);
?>