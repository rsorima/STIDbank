<?php
    session_start();
    include("../../config/connectdb.php");

    $userid = $_SESSION['uid'];

    $get_alerts = "SELECT a.alertId, a.userId, ad.alertDetailsId, ad.dynamicId, ad.message, a.isRead, ad.link FROM alerts a inner join alert_details ad on a.alertDetailsId = ad.alertDetailsId where userId = '$userid' and isRead = '0' order by a.alertId desc";
    $get_result = mysqli_query($con, $get_alerts);

    if(mysqli_num_rows($get_result) > 0){
        $i = 0;
        while($row = $get_result -> fetch_assoc()){
            $alerts[$i] = $row;
            $i++;
        }
        
        $apiResult = array(
            "code" => 200,
            "result" => $alerts,
            "count" => sizeof($alerts)
        );
    }else{
        $apiResult = array(
            "code" => 400
        );
    }

    echo json_encode($apiResult);
?>