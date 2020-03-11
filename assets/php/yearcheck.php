<?php
include('connector.php');

$sql = "select school_year_id from leave_person_status where school_year_id = '".$_POST['get_current_year']."'";

$query = mysqli_query($con,$sql);

if($row = mysqli_num_rows($query) ==0){
    echo 0 ;
}else{
    echo 1;
}

?>