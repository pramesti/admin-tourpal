
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Paket</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalMenu">Tambah Paket</button>
            </div>
			<div class="panel">
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($paket as $items): ?>
                        <tr>
                            <td><?= $items->id_paket?></td>
                            <td><?= $items->nama_paket?></td>
                            <td><?= $items->harga?></td>
                            <td>
                            <a href="<?= base_url('data/edit/paket/'.$items->id_paket);?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('data/delete/paket/'.$items->id_paket) ?>" class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
					</tbody>
                </table>
            </div>
            <div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Tambah paket</h4>
                  </div>
                  <form action="<?= base_url('data/insertPaket') ?>" method="post">
                      <div class="modal-body">
                        <input type="text" class="form-control" name="nama_paket" placeholder="Paket">
                        <br>
                        <input type="number" class="form-control" name="harga" placeholder="Harga">
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

			<!-- END MAIN CONTENT -->
	