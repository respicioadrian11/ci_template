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
					
			<div class="form-group col-md-10" style="padding-left: 20%;">
						<textarea class="form-control" rows="4" cols="5"></textarea>
				<div class="clip-upload">
 						<label for="file-input">
  							<h3><i class="fa fa-paperclip fa-lg" aria-hidden="true"></i><button type="submit" class="btn btn-warning">Post</button></h3>
						</label>
 						<input type="file" name="file-input" id="file-input">		
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<hr>
		<div class="col-sm-4">
			<p style="font-weight: bolder;">By: <?=$this->session->userdata('name');?> @ 10:57 am</p>
			<img src="assets/images/<?=$this->session->userdata('image');?>" width="100px" height="100px">
		</div>
		<div class="col-sm-8">
			<h1>My Post</h1>
			lorem ipsum Dolor
		</div>
	</div>
</div>
	

