<!-- MAIN CONTENT -->
<div class="main">
<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Kota</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalkota">Tambah kota</button>
            </div>
			<div class="panel">
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Kota</th>
								<th>Photo</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($kota as $items): ?>
							<tr>
								<td><?= $items->id_kota?></td>
								<td><?= $items->nama_kota?></td>
								<td><?= $items->photo?></td>
								<td>
                            	<a href="<?= base_url('data/edit/kota/'.$items->id_kota);?>" class="btn btn-warning">Edit</a>
                            	<a href="<?= base_url('data/delete/kota/'.$items->id_kota) ?>" class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
                            	</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
</div>			
<div class="modal fade" id="modalkota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah kota</h4>
            </div>
            <form action="<?= base_url('data/insertkota') ?>" method="post">
          <div class="modal-body">
                  <input type="text" class="form-control" name="nama_kota" placeholder=" Nama Kota">
                  <br>
                  <input type="file" class="form-control" name="photo" placeholder="">
                  <br>                             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>    </div>
							</div>
</div>
			<!-- END MAIN CONTENT -->