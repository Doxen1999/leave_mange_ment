<?php
include('connector.php');

$sql = "SELECT * FROM `school_year` order by school_year_id desc";

$array = array();
$subArray=array();
$sql_results = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($sql_results))
{

    $subArray['school_year_id'] = $row['school_year_id'];
    $array[] =  $subArray ;
}

  echo json_encode($array);

?>