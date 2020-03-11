<?php
include('connector.php');

$insert = "insert into school_year values('".$_POST['strformat']."','".$_POST['start_school_year']."','".$_POST['end_date']."','0')";

if($_POST['access']==1){
    if(mysqli_query($con,$insert)){
        echo 1;
    }else{
       echo 2;
    }
} else{
    echo 0; 
}
?>