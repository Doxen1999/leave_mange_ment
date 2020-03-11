<?php
include('connector.php');

$datatablepush = "SELECT * FROM `leave_p_setting` where person_type_id = ".$_POST['value']."";
$array = array();
$subArray=array();
$sql_results = mysqli_query($con,$datatablepush);
while($row = mysqli_fetch_array($sql_results))
{

    $subArray['person_type_id'] = $row['person_type_id'];
    $subArray['sick_leave'] = $row['sick_leave'];
    $subArray['pregnant_leave'] = $row['pregnant_leave'];
    $subArray['help_pregnant_leave'] = $row['help_pregnant_leave'];
    $subArray['activity_leave'] = $row['activity_leave'];
    $subArray['vacation_leave'] = $row['vacation_leave'];
    $subArray['monk_leave'] = $row['monk_leave'];
    
    $array[] =  $subArray ;
}

  echo json_encode($array);


?>