<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"SELECT * FROM student WHERE username='$username'AND password='$password'")or die(mysqli_error());
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['student_id'];
		
		echo 'true';
		
		mysqli_query($conn,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['student_id'].")")or die(mysqli_error());
		 }else{ 
		echo 'false';
		}	
				
		?>