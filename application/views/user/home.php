<?php $this->load->view('user/header');
    
 ?>
 <style>
   
 </style>
<link href="<?php echo base_url()?>assets/css/profile.css" rel="stylesheet">
<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            
                            <li class="active">
                                <i class="fa fa-user"></i> Profile
                            </li>
                        </ol>
                    </div>
            <div class="col-lg-4">
                <img src=<?=base_url("assets/image")."/".$list_user[0]->foto?> width="300" height="300">
            </div>
            <br><br><br>
            <div class="col-lg-6">
							<h4 class="blue">
								<span class="middle"><?php echo $list_user[0]->nama ?></span>

								<span class="label label-purple arrowed-in-right">
									<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
									online
								</span>
							</h4>

							<div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"> Username </div>

									<div class="profile-info-value">
										<span><?php echo $list_user[0]->username ?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Email </div>

									<div class="profile-info-value">
										<span><?php echo $list_user[0]->email ?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Alamat </div>

									<div class="profile-info-value">
										<span><?php echo $list_user[0]->alamat ?></span>
									</div>
								</div>
                                <br>
								<div class="profile-info-row">
                                    <span><a href="<?=site_url()?>/login/Update/<?php echo $list_user[0]->id?>"><button class="btn btn-success">Update My Profile!</button></a></span>
                                </div>
						</div><!-- /.col -->
					</div><!-- /.row -->
        </div>
        
    </div>
    <br>
    <br><br><br><br><br><br><br><br>
</div>