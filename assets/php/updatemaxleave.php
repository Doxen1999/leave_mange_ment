<?php
include('connector.php');

$update = "UPDATE leave_p_setting
SET sick_leave = '".$_POST['sick_leave']."',
pregnant_leave ='".$_POST['pregnant_leave']."',
help_pregnant_leave = '".$_POST['help_pregnant_laeve']."',
activity_leave = '".$_POST['activity_leave']."',
vacation_leave = '".$_POST['vacation_leave']."', 
monk_leave = '".$_POST['monk_leave']."' 
WHERE person_type_id =".$_POST['value']." ";

if($_POST['access']==1){
    if(mysqli_query($con,$update)){
        echo 1;
    }else{
       echo 2;
    }
}
?>
