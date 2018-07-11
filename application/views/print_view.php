<?php
$this->load->view('header');
?>

    <div class="container">

<div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1><?php echo $isi[0]->judul ?></h1>

        <!-- Author -->
        <p class="lead">
            by <?php echo $isi[0]->author ?>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $isi[0]->waktu ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src=<?=base_url("assets/image/review")."/".$isi[0]->foto?> alt="">

        <hr>

        <!-- Post Content -->
        <?php echo $isi[0]->post ?>
        <hr>

</body>
</html>