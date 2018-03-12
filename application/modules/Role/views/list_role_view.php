<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () 
	{
		$('#myInput').focus()
	});
</script>
<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<table class="table ">
				<tr scope="row">
					<td>ID</td>
					<td>User Name</td>
					<td>Email</td>
				</tr>
				<?php
				if($data==0)
				{
					echo'<tr scope="row">
					<td align="center" colspan="3">No records Found.</td>
					</tr>';
				}
				else
				{
					foreach($data as $key => $value) 
					{
						?>
						<tr scope="row">
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['uname']; ?></td>
							<td><?php echo $value['email']; ?></td>
						</tr>	
						<?php 
					} 
				} 
				?>
			</div>
		</div>
	</div>
</table>

<a class="btn btn-primary" href="<?php echo base_url();?>Role">Back</a>
