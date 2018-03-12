	<div class="body">
		<form method="post" action="<?php echo base_url(); ?>User" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<div class="form-group">
						<td><label for="username">Username:</label></td>
						<td><input class="form-control" type="text" name="uname" required="required"></td>
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<td><label for="password">Password</label></td>
						<td><input class="form-control" type="password" name="pass" required="required"></td>
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<td><label for="email">Email:</label></td>
						<td><input class="form-control" type="text" name="email" required="required"></td>
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<td><label for="role">Role:</label></td>
						<td>
							<select class="form-control" name="role">
							  <option value="">Select Role</option>
							  <?php 
								  foreach ($get_role as $key => $value) 
								  {
							  ?>
							  		<option value="<?=$value['role_id'];?>"><?php echo ucfirst($value['role_name']);?></option>
							  <?php }  ?>
							</select>
						</td>
					</div>
				</tr>
				<tr>
					<div>
						<td></td>
						<td><input class="form-control" type="submit" name="add_user" value="Add User"></td>
					</div>
				</tr>
			</table>
		</form>
	</div>
