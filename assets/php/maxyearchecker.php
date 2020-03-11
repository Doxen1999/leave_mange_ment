<?php
include('connector.php');

$sql = "select MAX(school_year_id) from leave_person_status";

$query = mysqli_query($con,$sql) or die("Error");

if($rows = mysqli_fetch_array($query)){
   echo $rows['MAX(school_year_id)'];
}else{
    echo "error";
}


?>