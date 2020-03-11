<?php
include('connector.php');

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
           on person_human.position_id = position_order.position_id";











?>