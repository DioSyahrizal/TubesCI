<style>
    .poster{
        height: 30%;
        width: 40%;
    }
    h2{
        text-align: center;
    }
</style>
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
        <img class="img-responsive poster" src=<?=base_url("assets/image/review")."/".$isi[0]->foto?> alt="">

        <hr>

        <!-- Post Content -->
        <?php echo $isi[0]->post ?>
        <hr>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
        
       

      

    </div>

</div>
<!-- /.row -->

<hr>

</body>
</html>