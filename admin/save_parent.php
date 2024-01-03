<?php
include('dbcon.php');
        
              
               $f_n = $_POST['fn'];
               $l_n = $_POST['ln'];
               $student_id = $_POST['student_id'];
               $pemail=$_POST['p_email'];
               $pphone=$_POST['p_phone'];

               mysqli_query($conn,"insert into parent (first_name,last_name,sudent_id,email,phone,location,status)
		values ('$f_n','$l_n','$student_id','$pemail','$pphone','uploads/NO-IMAGE-AVAILABLE.jpg','Unregistered')                                    
		") or die(mysqli_error()); ?>
<?php    ?>