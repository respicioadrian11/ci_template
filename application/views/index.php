<div class="container">
	<div class="row">
			<?php $this->load->view('sidenav');?>
			<?php $this->load->view('modal');?>		

		<div class="col-md-9" style="padding-top: 10px;">
			<div class="card">
				<div class="card-heading">
					<h3 class="card-title" style="padding-left: 10px;"><i class="fa fa-users"></i> User Profile</h3>
					<hr>
				</div>
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<img src="assets/images/<?=$this->session->userdata('image');?>" width="180px" height="200px">
								<span><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal"  style="margin-top: 5px;"><i class="fa fa-edit"></i> edit Profile</a></span>
							</div>
							<div class="col-sm-9">
								<label><i class="fa fa-id-card"></i> Full Name:</label>
								<h1><?=$this->session->userdata('name');?></h1>
								<label><i class="fa fa-address-card"></i> Address:</label>
								<h5><?=$this->session->userdata('address');?></h5>
								<label><i class="fa fa-birthday-cake"></i> BirthDay:</label>
								<h5><?=$this->session->userdata('birthday');?></h5>
								<label><i class="fa fa-male"></i><i class="fa fa-female"></i> Gender:</label>
								<h5><?=$this->session->userdata('gender');?></h5>
								<label><i class="fa fa-google"></i> UserName:</label>
								<a href="#"><h5><?=$this->session->userdata('username');?></h5></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
