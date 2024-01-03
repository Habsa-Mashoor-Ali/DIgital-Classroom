<form id="signin_parent" class="form-signin" method="post">
					<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Parent</h3>
					<input type="text" class="input-block-level"  name="f_name" placeholder="Firstname" required>
					<input type="text" class="input-block-level"  name="l_name" placeholder="Lastname" required>
					<label>Student ID Number</label>
					<select name="student_id" class="input-block-level span12">
						<option></option>
						<?php
						$query = mysqli_query($conn,"select * from student order by username ")or die(mysqli_error());
						while($row = mysqli_fetch_array($query)){
						?>
						<option value="<?php echo $row['student_id'] ?>"><?php echo $row['username']; ?></option>
						<?php}?>
					</select>
					<input type="email" class="input-block-level" id="username" name="username" placeholder="Email" required>
					<input type="password" class="input-block-level" id="password" name="pass" placeholder="Password" required>
					<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
					<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
			</form>
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_parent").submit(function(e){
					e.preventDefault();
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "parent_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to our DiGitC-Digital Classroom ", { header: 'Sign up Success' });
						var delay = 1000;
							setTimeout(function(){ window.location = 'dashboard_parent.php'  }, delay);  
						}else{
							$.jGrowl("Your data is not found in the database , check your details", { header: 'Sign Up Failed' });
						}
						}
					});
				}else
						{
						$.jGrowl("Your passwords does not match , check your passwords", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>
			<a onclick="window.location='parent_login.php'" id="btn_login" name="login" class="btn" type="submit">
			<i class="icon-signin icon-large"></i> Click here to Login</a>
			
			
			
				
		
					
		