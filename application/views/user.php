<div class="main">
<div class="container-fluid">
    <h3 class="page-title"><br>User</h3>
	<div class="row">
        <div class="col-md-12">
        <div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaluser">Tambah penonton</button>
            </div>
            <div class="panel">
		    	<div class="panel-body">
		    		<table class="table">
		    			<thead>
		    				<tr>
		    					<th>ID</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Password</th>
		    					<th>Aksi</th>
		    				</tr>
		    			</thead>
		    			<tbody>
                        <?php foreach ($user as $items): ?>
                            <tr>
                                <td><?=$items->id_user?></td>
                                <td><?=$items->nama_user?></td>
                                <td><?=$items->email?></td>
                                <td><?=$items->telp?></td>
                                <td><?=$items->alamat?></td>
                                <td><?=$items->tgl_lahir?></td>
                                <td><?=$items->password?></td>
                                <td>
                                    <a href="<?= base_url('data/edit/user/'.$items->id_user);?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('data/delete/user/'.$items->id_user) ?>" class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>   
                        </tbody>
		    		</table>
		    	</div>
		    </div>
        </div>
    </div>
    <div class="modal fade" id="modaluser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
            </div>
            <form action="<?= base_url('data/insertUser') ?>" method="post">
          <div class="modal-body">
                  <input type="text" class="form-control" name="nama_user" placeholder="Nama User">
                  <br>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                  <br>
                  <input type="number" class="form-control" name="telp" placeholder="Nomor Telepon">
                  <br>
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  <br>
                  <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
                  <br>
                  <input type="password" class="form-control" name="password" placeholder="password">
                  <br>

                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div> 
</div>