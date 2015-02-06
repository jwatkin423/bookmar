<div class="container">
	<div>
		<p>Login below: </p>
	</div>
	<div class="row">
		<div class="col-sm-4">
		<form action="<?php echo URL; ?>login/signIN" method="post">
			<table class="table table-striped table-bordered table-hover">
				<tbody>
					<tr>
						<td>Email:</td>
						<td><input type="email" name="useremail"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="userpassword"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><button type="submit" name="submit" class="btn btn-primary">Login</button></td>
					</tr>
				</tbody>
			</table>
		</form>
		</div>
	</div><!--row-->
</div><!--container-->