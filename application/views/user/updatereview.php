<?php $this->load->view('user/header');
  $session_data = $this->session->userdata('logged in');
  $data['username'] = $session_data['username'];
  $data['id'] = $session_data['id'];

date_default_timezone_set('Asia/Jakarta');
$tgl=date('F d, Y | h:i a');
 ?>

 <div class="container">
  	<div class="panel panel-default">
    	<div class="panel-heading">Tambah Review</div>
    		<div class="panel-body">

	    		<?php echo form_open_multipart('post/updatereview/'.$this->uri->segment(3)); ?>
	    		<?php echo validation_errors(); ?>
				
				<input type="text" name="id_user" class="form-control" id="id_user" value="<?php  echo $data['id'] ?>">
				<input type="text" name="author" class="form-control" id="author" value="<?php echo $review[0]->author ?>">
				<input type="hidden" name="waktu" class="form-control" id="waktu" value="<?php echo $tgl;?>">

				
				<div class="form-group">
					<label for="" >Judul : </label>
					<input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" value="<?php echo $review[0]->judul ?>">
				</div>

				<!-- <div class="form-group">
					<label for="" >Post : </label>
					<input type="text" name="post" class="form-control" id="post" placeholder="field">
				</div> -->
				<div class="form-group">
					<label for="">Post : </label>
				<textarea name="post" id="editor">
                    <?php echo $review[0]->post ?>
				</textarea>
				</div>

				<!-- <div class="form-group">
					<label for="" >Foto : </label>
					<input type="file" name="userfile" size="20" class="form-control" value="">
				</div>-->				

				<button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
				
			</div>
    	</div>
  	</div>
</div>
<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script>
	ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>