<!--modal registration-->
<div id="myReg" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning">
         <h4 class="modal-title" align="center">Create Account</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form" id="frmReg" name="frmReg" method="POST">
          <input type="hidden" name="userID" id="userID">
          <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="birthday" id="birthday" value="">
          </div>
          <div class="form-group">
            <select class="form-control" name="gender" id="gender">
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="username" id="username" placeholder="Email" value="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
          </div>
           <div class="form-group">
            <input type="file" class="form-control" name="userfile" id="userfile" value="">
          </div>
          <div class="form-group">
            <button class="btn btn-warning" type="submit" id="btnSubmit" name="btnSubmit">sign Up</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!--modal Login-->
<div id="myLog" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h4 class="modal-title">Account Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form" id="frmLogin" method="POST">
          <div class="form-group">
            <input type="email" class="form-control" name="username" id="username" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <button class="btn btn-warning"  type="submit" id="btnSubmit" name="btnSubmit">Log In</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h4 class="modal-title" align="center">Update Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form" id="frmEdit" name="frmEdit" method="POST">
          <input type="hidden" name="userID" id="userID">
          <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" value="<?=$this->session->userdata('name');?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="address" id="address" value="<?=$this->session->userdata('address');?>">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="birthday" id="birthday" value="<?=$this->session->userdata('birthday');?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="gender" id="gender">
              <option><?=$this->session->userdata('gender')?></option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="username" id="username" value="<?=$this->session->userdata('username');?>">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
          </div>
           <div class="form-group">
              <img src="assets/images/<?=$this->session->userdata('image');?>" width="100px" height="100px">
              <input type="file" class="form-control" name="userfile" id="userfile" value="">
          </div>
          <div class="form-group">
            <button class="btn btn-warning" type="submit" id="btnSubmit" name="btnSubmit">Update</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



  <!-- Modal -->
  <div class="modal left fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="float:left;">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Help <i class="fa fa-question-circle"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </p>
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->