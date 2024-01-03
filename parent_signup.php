<?php
include('admin/dbcon.php');
session_start();
$user_name = $_POST['username'];
$pass = $_POST['pass'];
$first_name = $_POST['f_name'];
$last_name = $_POST['l_name'];
$student_id = $_POST['student_id'];

$query = mysqli_query($conn,"select * from parent where  first_name='$first_name', last_name='$last_name' ,$user_name='email' and student_id = '$student_id'")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['parent_id'];

$count = mysqli_num_rows($query);
if ($count > 0){
	mysqli_query($conn,"update parent set password = '$pass', parent_status = 'Registered' where parent_id = '$id'")or die(mysqli_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
	echo 'false';
}
?>