<div>
	<form class="form-control" method="post" action="<?php echo base_url();?>Post/create_post" enctype="multipart/form-data">
		<table class="table">
			<tr scope="row">
				<div class="form-group">
					<td><label>Title</label></td>
					<td><input class="form-control" type="text" name="title"></td>
				</div>
			</tr>
			<tr scope="row">
				<div class="form-group">
					<td><label>Description</label></td>
					<td><textarea class="form-control" name="description"></textarea></td>
				</div>
			</tr>
			<tr scope="row">
				<div class="form-group">
					<td><label>Tags</label></td>
					<td><textarea class="form-control" name="tags"></textarea></td>
				</div>
			</tr>
			<tr scope="row">
				<div class="form-group">
					<td></td>
					<td><input type="submit" class="form-control" value="Add" name="sub_post"></td>
				</div>
			</tr>
		</table>
	</form>
</div>