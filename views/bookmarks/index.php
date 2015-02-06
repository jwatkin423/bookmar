<?php
	$bookmarks = $this->bmks;
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<table class="table table-striped table-bordered table-hover">
				<tbody>
					<tr>
						<td>Title</td><td>URL</td><td>Edit</td><td>Delete</td>
					</tr>
						<?php
							foreach($bookmarks as $bkms) {
								if ($bkms['secure'] == 'n') {
									$urlPrefix =  "http://".$bkms['bk_url'];
								} elseif ($bkms['secure'] == 's') {
									$urlPrefix = "https://".$bkms['bk_url'];
								} else {
									$urlPrefix = "http://".$bkms['bk_url'];
								}
						?>
								<tr>
									<td><a href="<?php echo $urlPrefix; ?>" target="blank"><?php echo $bkms['bk_title']; ?></a></td>
									<td><a href="<?php echo $urlPrefix;	?>" target="blank"><?php echo $bkms['bk_url']; ?></a></td>
									<td><a href="<?php echo URL ?>bookmark/edit/<?php echo $bkms['bk_id']; ?>">
									<span class="icon icon-pencil"></span></a></td>
									<td><a href="<?php echo URL ?>bookmark/delete/<?php echo $bkms['bk_id']; ?>">
									<span class="icon icon-trash"></span></a></td>
								</tr>
						<?php 
							} 
						?>
					<tr>
						<td colspan="4" align="right"><a class="btn btn-primary btn-xs" href="bookmark/add">Add Bookmark</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div><!--row-->
</div><!--container-->