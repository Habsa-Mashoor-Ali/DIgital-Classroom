<?php
include('dbcon.php');
if (isset($_POST['delete_parent'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"DELETE FROM parent where parent_id='$id[$i]'");
	//  mysqli_query($conn,"DELETE FROM student_parent where parent_id='$id[$i]'");
}
header("location: parents.php");
}
?>