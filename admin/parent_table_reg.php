<?php include('dbcon.php'); ?>
	<form action="delete_parent.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#parent_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="">
					<a href="parents.php">All</a>
				</li>
				<li class="">
					<a href="unreg_parents.php">Unregistered</a>
				</li>
				<li class="active">
				<a href="reg_parents.php">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>Email</th>
			
					<th>Student ID Number</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from parent LEFT JOIN student ON parent.student_id = student.student_id where status = 'Registered' ORDER BY parent.parent_id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['parent_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
	
		<td width="100"><?php echo $row['username']; ?></td> 
	
		<td width="30"><a href="edit_parent.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>