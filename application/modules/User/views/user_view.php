	<a class="btn btn-success" href="<?php base_url(); ?>User/add_user">Add User</a>

	<table class="table">
		<tr scope="row">
			<td>Username</td>
			<td>Email</td>
			<td>Role Id</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		<?php 
			foreach ($data as $key => $value) {?>
				<tr scope="row">
					<td><?php echo $value['uname'];?></td>
					<td><?php echo $value['email'];?></td>
					<td><?php echo $value['role_id'];?></td>
					<td><a class="btn btn-primary" href="<?php base_url(); ?>User/edit_user/<?php echo $value['id']; ?>">Edit</a></td>
					<td><a class="btn btn-danger" href="<?php base_url(); ?>User/delete_user/<?php echo $value['id']; ?>">Delete</a></td>
				</tr>	
		<?php
			}
		?>
	</table>