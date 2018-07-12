<?php
$this->load->view('header');

?>
<style>
	.jumbotron {

		padding: 100px 25px;
		font-family: Montserrat, sans-serif;
	}

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
<div class="jumbotron text-center" style="background-image: url(<?=base_url()?>assets/image/deadspace.jpg);">
	<h1>Tesseract</h1>
	<p>Review dan Katalog</p>
</div>

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


		<!-- <div id="katalog">
	<div class="container">
		<div class="well-sm">
			<h2>Katalog</h2>
		</div>

		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
				<div class="col-md-3">
					<img src="<?=base_url()?>assets/image/deadspace.jpg" height="200px" width="200px">
				</div>
			</div>
		</div>
	</div>
	<div class="container" align="right">See detail</div>
</div> -->

		<!-- Container (About Section) -->
		<!-- <div id="about" class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<h2>About Company Page</h2>
			<br>
			<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur
				sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing
				elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
				ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<br>
			<button class="btn btn-default btn-lg">Get in Touch</button>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-signal logo"></span>
		</div>
	</div>
</div> -->



		<footer class="container-fluid text-center">
			<a href="#myPage" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>

		</footer>

		<script>
			$(document).ready(function () {
				// Add smooth scrolling to all links in navbar + footer link
				$(".navbar a, footer a[href='#myPage']").on('click', function (event) {
					// Make sure this.hash has a value before overriding default behavior
					if (this.hash !== "") {
						// Prevent default anchor click behavior
						event.preventDefault();

						// Store hash
						var hash = this.hash;

						// Using jQuery's animate() method to add smooth page scroll
						// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
						$('html, body').animate({
							scrollTop: $(hash).offset().top
						}, 900, function () {

							// Add hash (#) to URL when done scrolling (default click behavior)
							window.location.hash = hash;
						});
					} // End if
				});

				$(window).scroll(function () {
					$(".slideanim").each(function () {
						var pos = $(this).offset().top;

						var winTop = $(window).scrollTop();
						if (pos < winTop + 600) {
							$(this).addClass("slide");
						}
					});
				});
			})

		</script>

		</body>

		</html>
