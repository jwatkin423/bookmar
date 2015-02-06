<div class="container">
	<div>
		<p>Register below: </p>
	</div>
	<div class="row">
		<div class="col-md-7">
			<form action="<?php echo URL; ?>bookmark/create" method="post">
				<table class="table table-striped table-bordered table-hover">
					<tbody>
						<tr>
							<td>Title:</td>
							<td><input type="text" name="bktitle" class="form-control" placeholder="Facebook"></td>
							<td><input type="checkbox" name="https"> Select if site uses HTTPS</td>
						</tr>
						<tr>
							<td><label>URL</label></td>
							<td colspan="2"><input type="text" name="bkurl" class="form-control" placeholder="www.facebook.com"></td>
						</tr>
						<tr>

							<td align="right" colspan="3"><button type="submit" name="submit" class="btn btn-primary btn-md">Add Bookmark</button></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div><!--row-->
</div><!--container-->
