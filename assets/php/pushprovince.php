<?php
include('connector.php');

$sql = "SELECT pro_discription FROM province WHERE pro_status = '1' ";

$array = array();
$subArray=array();
$sql_results = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($sql_results))
{

    $subArray['pro_discription'] = $row['pro_discription'];
    $array[] =  $subArray ;
}

  echo json_encode($array);

?>