<?php
include('connector.php');

for ($x = 0; $x <= 5; $x++) {

    $push_p_setting = "select * from leave_p_setting where person_type_id = '$x'";
    $push_school_year = "select * from school_year where active_stat = '1'";
    
    $query_push_p_setting = mysqli_query($con,$push_p_setting) or die("Error");
    $query_pschool_year = mysqli_query($con,$push_school_year) or die("Error_1");
    
    if($rows_psetting = mysqli_fetch_array($query_push_p_setting)){
        if($rows_pschool_year = mysqli_fetch_array($query_pschool_year)){
            $push_personid = "select person_id from person_human where person_type_id = '$x'";
            $push_personid_query = mysqli_query($con,$push_personid) or die("Error_2");
    
            while($rows_pushperson_id = mysqli_fetch_array( $push_personid_query)){
                $insert_data = "INSERT INTO leave_person_status values('".$rows_pushperson_id['person_id']."',
                '".$rows_pschool_year['school_year_id']."',
                '".$rows_psetting['sick_leave']."',
                '".$rows_psetting['pregnant_leave']."',
                '".$rows_psetting['help_pregnant_leave']."',
                '".$rows_psetting['activity_leave']."',
                '".$rows_psetting['vacation_leave']."',
                '".$rows_psetting['monk_leave']."'
                )";
                $insert_data_query = mysqli_query($con,$insert_data) or die("Cant insert");
            }
    
        }
    }else{
        echo $x;
        echo "False" ;
    }
}

?>
<!-- echo $rows_pschool_year['school_year_id'];
        echo $rows_psetting['sick_leave'];
        echo $rows_psetting['pregnant_leave'];
        echo $rows_psetting['help_pregnant_leave'];
        echo $rows_psetting['activity_leave'];
        echo $rows_psetting['vacation_leave'];
        echo $rows_psetting['monk_leave']; -->

        