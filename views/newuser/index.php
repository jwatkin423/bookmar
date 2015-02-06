<div class="container">
	<div>
		<p>Register below: </p>
	</div>
	<div class="row">
		<div class="col-sm-6">
		<form action="<?php echo URL; ?>newuser/createUser" method="post">
			<table class="table table-striped table-bordered table-hover">
				<tbody>
					<tr>
						<td>Name:</td>
						<td><input class="form-control" type="text" name="username" placeholder="Jane Doe"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input class="form-control" type="email" name="useremail" placeholder="jane.doe@example.com"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td class="" id="pwd1"><input class="form-control" type="password" name="userpassword" id="password1"></td>
					</tr>
					<tr>
						<td>Confirm Passwod:</td>
						<td class="" id="pwd2"><input class="form-control" type="password" name="userpassword2" id="password2"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><button type="submit" name="submit" class="btn btn-primary" id="sbmt">Registered</button></td>
					</tr>
				</tbody>
			</table>
		</form>
		</div>
		<div>
			<div class="col-sm-6">
				<label id="label-password-match" class="label label-primary"></label>
			</div>
		</div>
	</div><!--row-->
</div><!--container-->