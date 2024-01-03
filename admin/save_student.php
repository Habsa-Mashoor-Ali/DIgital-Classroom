<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $class_id = $_POST['class_id'];
               $email=$_POST['email'];
               $phone=$_POST['phone'];

               mysqli_query($conn,"insert into student (username,firstname,lastname,location,email,phone,class_id,status)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$email','$phone','$class_id','Unregistered')                                    
		") or die(mysqli_error()); ?>
<?php    ?>