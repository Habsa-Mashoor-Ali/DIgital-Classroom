<div class="row-fluid">
       <a href="parents.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Parent</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Parent</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from parent LEFT JOIN student ON student.student_id = parent.student_id where parent_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['student_id']; ?>"><?php echo $row['username']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from student order by username");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['student_id']; ?>"><?php echo $cys_row['username']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                      </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['first_name']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['last_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
								
                    <div class="control-group">
                                          <div class="controls">
                                            <input  name="p_email" value="<?php echo $row['email']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $f_n = $_POST['fn'];
                                $l_n = $_POST['ln'];
                                $p_email=$_POST['p_email'];
                                $cys = $_POST['cys'];
                      

								mysqli_query($conn,"update parent set first_name ='$f_n' , last_name = '$l_n' , email='$p_email' ,student_id = '$cys' where parent_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "parents.php"; 
								</script>

                       <?php     }  ?>
	




