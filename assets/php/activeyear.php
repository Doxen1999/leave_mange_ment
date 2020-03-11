<?php
include('connector.php');

$sql = "update school_year set active_stat = '0' where active_stat='1' ";
if($query1 = mysqli_query($con,$sql)){
    $data_rename = "update school_year set active_stat = '1' where 	school_year_id='".$_POST['active_school_year']."' ";
    if(mysqli_query($con,$data_rename)){
        echo 1;
    }
}else{
    echo 2;
}

?>