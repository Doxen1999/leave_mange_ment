<?php
include('connector.php');
$username = $_POST['username'];
$password = $_POST['password'];
$ip=$_SERVER['REMOTE_ADDR'];

$sql = "select * from user_login where username = '$username' and password = '$password' ";

$result = mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1 ){
    $data = array();
array_push($data,array(
        "access" => 1,
        "person_id" => $rows['person_id'],
        "username" => $rows['Username'],
        "password" => $rows['Password'],
        "glogin_id" => $rows['glogin_id'],
        "role" => $rows['role']
));
}else{
    $data = array();
    array_push($data,array(
        "access" => 0
));
}
echo json_encode($data);
// if($ip == "::1"){
//     echo json_encode($data);
// }else{
//     echo "<meta http-equiv='refresh' content='0;url=hellocutie.php' >";
// }
?>