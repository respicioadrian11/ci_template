<!--modal registration-->
<div id="myReg" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Create Account</h4>
      </div>
      <div class="modal-body">
        <form class="form" id="frmReg" method="POST">
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
            <button class="btn btn-warning" onclick="swal('alert','Successfully Alert','info')" type="submit" id="btnSubmit">sign Up</button>
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
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Account Login</h4>
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
            <button class="btn btn-warning" onclick="swal('alert','Successfully Alert','info')" type="submit" id="btnSubmit">Log In</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>