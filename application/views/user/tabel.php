<?php $this->load->view('user/header');

  ?>

  <style>
         {
                width: 160px;
                height: 15px;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
        }
  </style>
  <div class="container">
<div class="panel panel-default">
	<div class="panel-heading">Review User</div>
        <div class="panel-body">
                    <table class="table table-striped" id="example">
                    <thead>
                            <tr>                
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Judul</th>
                                    <th>Waktu</th>
                                    <th>Post</th>
                                    <th>Foto</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                            </tr>
                        </thead>	
                    <tbody class="isi">
                        
                    </tbody>
	                </table>
                </div>  
                </div>
</div>

<?php $this->load->view('user/footer');
 ?>