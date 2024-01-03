<?php include('header.php'); ?>
  <body id="login">
    <div class="container">
	<div class="span6">
		<div class="title_index">
				<?php include('title_index.php'); ?>
		</div>
	</div>
      <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Please Login</h3>
        <input type="email" class="input-block-level" id="username" name="username" placeholder="Username" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Sign in</button>
        <hr>  
		<p>	Don't You have an account yet?</p>
    
				<button data-placement="top" title="Sign In as parent" id="signin_parent" onclick="window.location='signup_parent.php'" id="btn_parent" name="login" class="btn btn-info" type="submit"><i class="icon-edit"></i> Sign up</button>
		      </form>
				<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login3.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to DiGitC Learning Management System", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_parent.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>

<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_parent').tooltip('show'); $('#signin_parent').tooltip('hide');
														});
														</script>	
		


    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>