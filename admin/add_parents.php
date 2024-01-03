<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Parent</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_parent" method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="student_id" class="" name="Enter student ID "required>
                                             	<option></option>
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
                                            <input name="fn" class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input  name="p_email" class="input focused" id="focusedInput" type="email" placeholder = "Email" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input  name="p_phone" class="input focused" id="focusedInput" type="text" placeholder ="Phone" required>
                                          </div>
                                        </div>
								
										
										<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<script>
			jQuery(document).ready(function($){
				$("#add_parent").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_parent.php",
						data: formData,
						success: function(html){
							$.jGrowl("Parent Successfully  Added", { header: 'parent Added' });
							$('#parentTableDiv').load('parents_table.php', function(response){
								$("#parentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
						}
					});
				});
			});
			</script>		





