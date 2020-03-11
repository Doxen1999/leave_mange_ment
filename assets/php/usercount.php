<?php
include("connector.php");

$usercount = "select * from person_human";

$query = mysqli_query($con,$usercount);

$data = array();
array_push($data,array(
        "usercount" => $rows = mysqli_num_rows($query),
));
echo json_encode($data);
?>