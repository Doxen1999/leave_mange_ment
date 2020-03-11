<?php
include('getdata.php');
mysqli_set_charset($con,"utf8")or die("cant set charset");
$array = array();
$subArray=array();
$sql_results = mysqli_query($con,$datatablepush);
while($row = mysqli_fetch_array($sql_results))
{

    $subArray['prefix'] = $row['prefix_description'];
    $subArray['person_id'] = $row['person_id'];
    $subArray['f_name'] = $row['f_name_th'];
    $subArray['l_name'] = $row['l_name_th'];
    $subArray['lisdep_dis'] = $row['lisdep_dis'];
    $subArray['dep_discription'] = $row['dep_discription'];
    $subArray['detail'] = $detail = "<center><button  onclick='popup_data(".$row['person_id'].")' type='button'>ดูข้อมูล</button></center>";
    $array[] =  $subArray ;
}

  echo json_encode($array);

?>
