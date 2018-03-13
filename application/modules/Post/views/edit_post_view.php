<div>
	<form class="form-control" method="post" action="<?php echo base_url();?>Post/edit_post/<?=$data['post_id'];?>" enctype="multipart/form-data">
		<table class="table">
			<tr scope="row">
				<div class="form-group">
					<td><label>Title</label></td>
					<td><input class="form-control" type="text" name="title" value="<?php echo $data['post_title'] ?>"></td>
				</div>
			</tr>
			<tr scope="row">
				<div class="form-group">
					<td><label>Description</label></td>
					<td><textarea class="form-control" name="description"><?php echo $data['post_desc'] ?></textarea></td>
				</div>
			</tr>
			<tr scope="row">
				<div class="form-group">
					<td><label>Tags</label></td>
					<td><textarea class="form-control" name="tags"><?php echo $data['post_tags'] ?></textarea></td>
				</div>
			</tr>
			<tr scope="row">
				<div class="form-group">
					<td></td>
					<td><input type="submit" class="form-control" value="Update" name="sub_post"></td>
				</div>
			</tr>
		</table>
	</form>
</div>