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
    .form-control, .btn {
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
				<div class="form-group">
					<h2>Daftar</h2>
				</div>
				
				<?php echo form_open_multipart('login/create');?>
	    		<?php echo validation_errors(); ?>
				
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Input field">
				</div>
				
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Input field">
				</div>
                
				<div class="form-group">
					<label for="">Nama</label>
					<input type="nama" class="form-control" id="nama" name="nama" placeholder="Input field">
				</div>
                
				<div class="form-group">
					<label for="">Alamat</label>
					<input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Input field">
				</div>

                <div class="form-group">
					<label for="" >Foto : </label>
					<input type="file" name="userfile" size="20" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<?php echo form_close(); ?>
		</div>
	</div>
	