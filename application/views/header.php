<?php 
  $session_data = $this->session->userdata('logged in');
    $data['username'] = $session_data['username'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Tesseract - Review and Katalog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/add.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/blog-post.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
  <script src="<?=base_url()?>assets/js/jquery.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/main.js"></script>
  <style>
   
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            </button>
            <a target="" href="<?=site_url()?>/post" class="navbar-brand">Tesseract</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="<?=site_url()?>post">Home</a></li>
                 <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DropDown
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Link 2</a></li>
                    </ul>
                 </li>               -->
                 <!-- <li><a href="#">Review</a></li>
                 <li><a href="#">Katalog</a></li> -->
             </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php 
           if(!empty($data['username'])) {

             ?>     
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php echo $list_user[0]->username?> </strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <img src=<?=base_url("assets/image")."/".$list_user[0]->foto?> width="100" height="100">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php echo $list_user[0]->nama?></strong></p>
                                        <p class="text-left small"><?php echo $list_user[0]->email?></p>
                                        <p class="text-left">
                                            <a href="<?=site_url()?>Post/userhome" class="btn btn-primary btn-block btn-sm">See Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="<?=site_url()?>Login/logout" class="btn btn-danger btn-block">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <?php } else{?>
                <li><a href="<?=site_url()?>Login/daftar">Daftar</a></li>
                <li><a href="<?=site_url()?>Login">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>