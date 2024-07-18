    <div id="content-wrapper">

      <div class="container-fluid">
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
            <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
          Tambah Data
        </button>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tahun Akademik</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($tahun as $b): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $b->TAHUN_AJARAN ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/Tahun/edit/'.$b->ID_TAHUN) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
          <a onclick="deleteConfirm('<?php echo site_url('admin/Tahun/delete/'.$b->ID_TAHUN) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>

      </div>

      <!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><?= $sub ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <form action="<?php echo site_url('admin/Tahun') ?>" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="TAHUN_AJARAN">Tahun Akademik*</label>
                <input class="form-control <?php echo form_error('TAHUN_AJARAN') ? 'is-invalid':'' ?>"
                 type="text" name="TAHUN_AJARAN" placeholder="Tahun Akademik" />
                <div class="invalid-feedback">
                  <?php echo form_error('TAHUN_AJARAN') ?>
                </div>
              </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
              </div>
              <div class="modal-footer">
                <div class="card-footer small text-muted">
            <h4>field tanda * Harus Di isi</h4>
          </div>
              </div>
            </div>
          </div>
        </div>