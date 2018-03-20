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
			<div class="form-group col-md-10" style="padding-left: 20%;">
						<textarea class="form-control" rows="4" cols="5" id="post" name="post"></textarea>
				<div class="clip-upload">
 						<label for="file-input">
  							<h3><i class="fa fa-paperclip fa-lg" aria-hidden="true"></i><button type="submit" id="btnSubmit" class="btn btn-warning">Post</button></h3>
						</label>
 						<input type="file" name="file-input" id="file-input">
 					</form>		
				</div>
			</div>
		</div>
	</div>
<?php
	$query = $this->db->query("SELECT * FROM post");
	$data=array();
	foreach ($query->result() as $row):?>
			

	<div class="row">
		<hr>
		<div class="col-sm-4">
			<p style="font-weight: bolder;">By: <?= $row->user;?> @ <?= $row->datecreated;?></p>
			<img src="assets/images/<?= $row->image;?>" width="100px" height="100px">
		</div>
		<div class="col-sm-8">

			<h5><?= $row->post;?></h5>
			
		</div>
	</div>
	
	<?php endforeach;?>
</div>
	

