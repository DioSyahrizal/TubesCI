<footer>
        <center>
        	&copy;Muhammad Dio Syahrizal
        </center>
    </footer>

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable({
			"processing":true,
			"serverSide":true,
			"lengthMenu":[[3,6,10,-1],[3,6,10,"All"]],
			"ajax":{
				url : "<?php echo site_url('post/data_server/'.$isitabel[0]->id) ?>",
				type : "POST"
			},
			"columnDefs":
			[
				
				{
					"targets":0,
					"data":"id",
				},
				{
					"targets":1,
					"data":"author",
				},
				{
					"targets":2,
					"data":"judul",
				},
				{
					"targets":3,
					"data":"waktu",
				},
                {
                    "targets":4,
                    "data":"post",
					"render": function ( data, type, row ) {
						return data.length > 10 ?
						data.substr( 0, 200 ) +'....' :
						data;
					}
                },
				{
					"targets":5,
					"data":"foto",
					"render":function(data,type,full,meta){
						return '<img src="<?=base_url()?>assets/image/review/'+data+'" width="100">';
					}
				},
				{
					"targets":6,
					"data":null,
					"searchable":false,
					"render":function(data,type,full,meta){
						return '<a href="<?=site_url()?>/post/updateReview/'+data["id"]+'">Edit</a>';
					}
				},
				{
					"targets":7,
					"data":null,
					"searchable":false,
					"render":function(data,type,full,meta){
						return '<a href="<?=site_url()?>/post/deleteReview/'+data["id"]+'">Delete</a>';
					}
				},
				
			]
		});
	});
</script>

</body>
</html>