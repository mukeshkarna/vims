	<table class="table">
		<tr scope="row">
			<td>ID</td>
			<td>User Name</td>
			<td>Email</td>
		</tr>
		<?php 
		foreach ($data as $key => $value) 
		{
		?>
			<tr scope="row">
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['uname']; ?></td>
				<td><?php echo $value['email']; ?></td>
			</tr>	
		<?php } ?>
	</table>