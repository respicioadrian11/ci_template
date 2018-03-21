<div class="container">
    <div class="row profile">
        <div class="col-sm-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="assets/images/<?=$this->session->userdata('image');?>" class="img-responsive" alt="" style="margin-left: 60px">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?=$this->session->userdata('name');?>
                    </div>
                    <div class="profile-usertitle-job">
                        Developer
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul type="none">
                        <li>
                            <a href="feed">
                            <i class="fa fa-home"></i>
                             Home 
                            </a>
                        </li>
                        <li>
                            <a href ="ind">    
                            <i class="fa fa-users"></i> 
                            <?=$this->session->userdata('username');?>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#helpModal">
                            <i class="fa fa-question-circle"></i>
                             Help
                            </a>
                        </li>
                        <li>
                            <a href="ind/logout">
                            <i class="fa fa-sign-out"></i> 
                            Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
       