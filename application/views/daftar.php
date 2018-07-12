<?php $this->load->view('header'); ?>

<style type="text/css">
	.form-group {
		width: 340px;
		margin: 50px auto;
	}

	.form-group form {
		margin-bottom: 15px;
		background: #f7f7f7;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}

	.form-group h2 {
		margin: 0 0 15px;
	}

	.form-control,
	.btn {
		min-height: 38px;
		border-radius: 2px;
	}

	.btn {
		font-size: 15px;
		font-weight: bold;
	}

</style>

<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
				<h2>Daftar</h2>
			

			<?php echo form_open_multipart('login/create');?>
			<?php echo validation_errors(); ?>
			<label for="">Username</label>
			<div class="wrap-input100 validate-input" data-validate="Username required">
				<input class="input100" type="text" id="username" name="username" placeholder="Username">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-user" aria-hidden="true"></i>
				</span>
			</div>

			<label for="">Password</label>
			<div class="wrap-input100 validate-input" data-validate="Password required">
				<input class="input100" type="password" id="password" name="password" placeholder="Password">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-lock" aria-hidden="true"></i>
				</span>
			</div>
			
			<label for="">E-Mail</label>
			<div class="wrap-input100 validate-input" data-validate="Email required">
				<input class="input100" type="text" id="email" name="email" placeholder="E-mail">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
			</div>

			<label for="">Nama</label>
			<div class="wrap-input100 validate-input" data-validate="Nama required">
				<input class="input100" type="text" id="nama" name="nama" placeholder="Nama">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-user" aria-hidden="true"></i>
				</span>
			</div>

			<label for="">Alamat</label>
			<div class="wrap-input100 validate-input" data-validate="Alamat required">
				<input class="input100" type="text" id="alamat" name="alamat" placeholder="Alamat">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-home" aria-hidden="true"></i>
				</span>
			</div>

			<label for="">Foto</label>
			<div class="wrap-input100 validate-input">
				<input type="file" name="userfile" size="20" class="input100">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
					<i class="fa fa-user" aria-hidden="true"></i>
				</span>
			</div>

			<div class="container-login100-form-btn">
				<button type="submit" class="login100-form-btn">Submit</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
