<?php
include('connector.php');

$array = array();
$subarray = array();
$sql = "select * from leave_person_status where person_id = '".$_POST['userdata']."'AND school_year_id = '".$_POST['active_year']."'  ";
$query = mysqli_query($con,$sql) or die ("Cant query data");

if($rows = mysqli_fetch_array($query)){

    $subarray['sick_leave'] = $rows['sick_leave'];
    $subarray['pregnant_leave'] = $rows['pregnant_leave'];
    $subarray['help_pregnant_leave'] = $rows['help_pregnant_leave'];
    $subarray['activity_leave'] = $rows['activity_leave'];
    $subarray['vacation_leave'] = $rows['vacation_leave'];
    $subarray['monk_leave'] = $rows['monk_leave'];

    $array[]= $subarray;

}
echo json_encode($array);
?>