
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<h3 class="page-title">Daftar Destinasi</h3>
			<div class="row"></div>
			<div class="text-right" style="padding-bottom:20px">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalMenu">Tambah Destinasi</button>
            </div>
			<div class="panel">
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
                            <th>Nama Wisata</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                            <th>Cover</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($destinasi as $items): ?>
                        <tr>
                            <td><?= $items->id_tempat?></td>
                            <td><?= $items->nama_wisata?></td>
                            <td><?= $items->deskripsi?></td>
                            <td><?= $items->lokasi?></td>
                            <td><?= $items->cover?></td>
                            <td>
                            <a href="<?= base_url('data/edit/destinasi/'.$items->id_tempat);?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('data/delete/destinasi/'.$items->id_tempat) ?>" class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
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
                      <h4 class="modal-title" id="myModalLabel">Tambah Destinasi</h4>
                  </div>
                  <form action="<?= base_url('data/insertDestinasi') ?>" method="post">
                      <div class="modal-body">
                        <input type="text" class="form-control" name="nama_wisata" placeholder="Nama Wisata">
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                        <input type="file" class="form-control" name="cover" placeholder="Cover">
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
	