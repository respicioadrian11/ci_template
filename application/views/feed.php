<div class="container">
	<div class="row">
			<?php $this->load->view('sidenav');?>
		<div class="col-md-9" style="padding-top: 10px;">
			
				
			<h3 class="card-title" style="padding-left: 10px;"><i class="fa fa-newspaper"></i> NewsFeed</h3>
			<hr>
				
				
<div class="container">
	<div class="row">
		<div class="col-sm-12">
					<h4 class="card-title" align="center">Posts</h4>
					<form class="form" id="post" method="POST">
						<input type="hidden" id="postID" name="postID" value="">
			<div class="form-group col-md-10" style="padding-left: 20%;">
						<textarea class="form-control" rows="3" cols="5" id="post" name="post"></textarea>
				<div class="clip-upload">
 						<label for="file-input">
  							<h3><i class="fa fa-paperclip fa-lg" aria-hidden="true"></i><button type="submit" id="btnSubmit" class="btn btn-warning" style="color: #fff;">Post</button></h3>
						</label>
 						<input type="file" name="file-input" id="file-input">
 					</form>		
				</div>
			</div>
		</div>
	</div>
<?php
	$query = $this->db->query("SELECT * FROM post ORDER BY id DESC");
	$data = array($query);
	if($data): foreach($query->result() as $row):?>
			

	<div class="row">
		<hr style="padding-top: 5px;">
		<div class="col-sm-4">
			<p style="font-weight: bolder;">By: <?= $row->user;?> @ <?= $row->datecreated;?></p>
			<img src="assets/images/<?= $row->image;?>" width="100px" height="100px">
		</div>
		<div class="col-sm-5">
			<p align="justify"><?=character_limiter($row->post, 100);?>
			<a  href="#view<?= $row->id;?>" data-toggle="modal"><i class="fa fa-eye"></i></a>
			<a  href="<?php echo site_url('feed/del/' .$row->id) ?>" onclick="return swal('Deleted','Successfully Deleted','success')"><i class="fa fa-trash"></i></a>
			<a  href="#edit<?=$row->id;?>" data-toggle="modal"><i class="fa fa-edit"></i></a>
			<p>
		</div>
	</div>


<div id="view<?= $row->id; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> <?= $row->user;?></h4>
			</div>
			<div class="modal-body">
				<p><img src="assets/images/<?= $row->image;?>" width="100px" height="100px"></p>
				<strong><?=$row->datecreated;?></strong>
				<p><?=$row->post;?></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
			</div>
		</div>
	</div>
</div>

<div id="edit<?= $row->id; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> <?= $row->user;?></h4>
			</div>
			<div class="modal-body">
				<p><img src="assets/images/<?= $row->image;?>" width="100px" height="100px"></p>
				<strong><?=$row->datecreated;?></strong>
				<form>
			<div class="form-group">
				<textarea name="postedit" id="postedit" class="form-control" rows="3" cols="4"><?=$row->post;?></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit" id="btnSubmit">Save</button>
			</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
			</div>
		</div>
	</div>
</div>

	
<?php endforeach;
else:?>
	<h1>NO POST YET</h1>
<?php endif; ?>