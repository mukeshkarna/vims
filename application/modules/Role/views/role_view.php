<table class="table">
	<tr scope="row">
		<td>ID</td>
		<td>Role</td>
	</tr>

	<?php  
	foreach ($data as $key => $value) 
	{ 
		?>
		<tr scope="row">
			<td><?php echo $value['role_id']; ?></td>
			<td>
				<a href="<?php echo base_url(); ?>Role/visitRolePage/<?=$value['role_id'];?>">
					<?php echo ucfirst($value['role_name']); ?>
				</a>
			</td>
		</tr>
		<?php	}  ?>
	</table>