<?php
include('connector.php');

$sql = "select * from school_year where active_stat = '1'";
$query = mysqli_query($con,$sql);

if($row=mysqli_fetch_array($query)){
  echo $row['school_year_id'];
}

?>