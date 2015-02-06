<?php
	$bkEdit = $this->bmkEdit;
?>
<div class="container">
	<div>
		<p>Register below: </p>
	</div>
	<div class="row">
		<div class="col-md-5">
			<form action="<?php echo URL; ?>bookmark/update" method="post">
				<table class="table table-striped table-bordered table-hover">
					<tbody>
						<tr>
							<td>Title:</td>
							<td><input type="text" name="bktitle" value="<?php echo $bkEdit['bk_title']; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td>URL:</td>
							<td><input type="text" name="bkurl" value="<?php echo $bkEdit['bk_url']; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td align="right" colspan="2"><button class="btn btn-primary btn-md" type="submit" name="submit" >Update Bookmark</button></td>
						</tr>
					</tbody>
				</table>
				<input type="hidden" name="bkid" value="<?php echo $bkEdit['bk_id']; ?>">
			</form>
		</div>
	</div><!--row-->
</div><!--container-->
