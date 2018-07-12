<?php
$this->load->view('header');

?>
<style>
    .kanan{
		float: right !important;
		padding-right: 40px;
		padding-bottom: 20px;
	}

</style>
<?=form_open('post/hasilcari');?>
	<div class="row">
		<div class="kanan col-xs-6 col-md-4">
			<div class="input-group">
				<input type="text" class="form-control" name="judul" placeholder="Search" id="txtSearch" />
				<div class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</form>
<div id="review">
	<div class="container">
		<div class="well-sm">
			<h2>Review</h2>
		</div>

		<div class="row">
			<?php foreach ($review as $key) { ?>
			<div class="col-sm-3">
				<img class="img-responsive img-center" src=<?=base_url( "assets/image/review"). "/".$key->foto?> height="300px" width="300px">
				<a href="<?php echo site_url('post/review/'. $key->id)?>">
					<h3>
						<?php echo $key->judul?>
					</h3>
				</a>
				<?php //echo word_limiter($key->post, 10);?>
			</div>
			<?php } ?>
		</div>
