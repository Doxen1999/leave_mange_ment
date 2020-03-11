<?php
include('connector.php');

$sql = "SELECT burden_discription FROM burden WHERE burden_status = '1' ";

$array = array();
$subArray=array();
$sql_results = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($sql_results))
{

    $subArray['burden_discription'] = $row['burden_discription'];
    $array[] =  $subArray ;
}

  echo json_encode($array);

?>