<?php
include("../../config/connectdb.php");

$groupid = $_POST['groupid'];

$deleteGroup = "DELETE from groups where group_id = '$groupid'";
$result = mysqli_query($con, $deleteGroup);
?>