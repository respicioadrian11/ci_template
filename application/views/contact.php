<div class="container-fluid">
  <div class="row">
    <div class="jumbotron jumbotron-danger text-center" style="background-color:#dc6900; color: #ffffff;">
      <h1 style="font-family:serif;"><i class="fa fa-drupal"></i> CODEIGNITER</h1>
  <div class="dropdown" style="float:right; padding-right: 10px;">
    <button class="btn btn-warning " type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> MENU
      <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-left" style="padding-right:15px; ">
            <li><a class="icon-bar a" href="<?= base_url()?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a class="icon-bar a" href="#" data-toggle="modal" data-target="#myReg"><i class="fa fa-edit"></i> Sign Up</a></li>
            <li><a class="icon-bar a" href="#" data-toggle="modal" data-target="#myLog"><i class= "fa fa-lock"></i> Login</a></li>
            <li><a class="icon-bar a" href="<?=base_url()?>about"><i class="fa fa-eye"></i> about</a></li>
            <li><a class="icon-bar a" href="<?= base_url('about/contact')?>"><i class="fa fa-address-book"></i> Contact Us</a></li>
        </ul>
  </div>
</div>

<div class="container-fluid">
    <h1>Contact Us</h1>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-danger box">
        <div class="panel-heading">
          <h3 class="panel-title">For Suggestions and Inquiries</h3>
        </div>
        <div class="panel-body">
        <div class="form-group">
          <textarea name="message" cols="80" id="editor1" name="editor1" rows="5" class=" form-control"></textarea>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="email" name="email" placeholder="email">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-warning" onclick="swal('alert','Successfully Alert','info')" id="btnSubmit"><i class="fa fa-send"></i>  Send</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <hr>
      <h2>Like Us and Follow Us on:</h2>
        <p align="center"><a href="#"><h1 style="color:blue;"><i class="fa fa-facebook"></i>acebook</a></h1></p>
        <p align="center"><a href="#"><h1 style="color:blue;"><i class="fa fa-twitter"></i>twitter</a></h1></p>
         <p align="center"><a href="#"><h1 style="color:blue;">@<i class="fa fa-yahoo"></i>ahoo!</a></h1></p>
      <hr>
    </div>
  </div>
</div>