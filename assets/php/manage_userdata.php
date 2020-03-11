<?php
include('connector.php');
$userperson_id = $_POST['userid'];
$datatablepush = "select * from person_human
    join person_sai 
           on person_human.person_sai_id = person_sai.sai_id
    join person_prefix 
           on person_human.person_prefix_id = person_prefix.prefix_id
    join person_academic 
           on person_human.person_academic_id = person_academic.academic_id
    join person_type 
           on person_human.person_type_id = person_type.type_id
    join local_department 
           on person_human.department_id = local_department.dep_id
    join person_incom 
           on person_human.status_income_id = person_incom.person_inid
    join p_status 
           on person_human.status_person = p_status.p_status_id
    join side_list 
           on person_human.side_id = side_list.side_id
    join list_department 
           on person_human.listdep_id = list_department.listdep_id
    join position_order 
           on person_human.position_id = position_order.position_id where person_id = '$userperson_id' ";

$array = array();
$subArray=array();
$sql_results = mysqli_query($con,$datatablepush);
           while($row = mysqli_fetch_array($sql_results))
           {
           
               $subArray['prefix'] = $row['prefix_description'];
               $subArray['prefix_id'] = $row['prefix_id'];
               $subArray['person_id'] = $row['person_id'];
               $subArray['f_name'] = $row['f_name_th'];
               $subArray['l_name'] = $row['l_name_th'];
               $subArray['listdep_dis'] = $row['listdep_dis'];
               $subArray['dep_discription'] = $row['dep_discription'];
               $subArray['academic_discription'] = $row['academic_discription'];
               $subArray['sai_discription'] = $row['sai_discription'];
               $subArray['type_description'] = $row['type_description'];
               $subArray['position_dis'] = $row['position_dis'];
               $subArray['p_discription'] = $row['p_discription'];
               $subArray['side_dis'] = $row['side_dis'];
               $array[] =  $subArray ;
           }
           
             echo json_encode($array);

?>