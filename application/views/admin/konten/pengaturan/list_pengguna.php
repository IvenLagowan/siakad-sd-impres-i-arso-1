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
          Tambah USER
        </button>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status Login</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($kondisi as $s): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td width="100">
                      <?php echo $s->NAMA_PENGAJAR ?>
                    </td>
                    <td width="100">
                      <?php echo $s->USERNAME ?>
                    </td>
                    <td>
                      <?php echo $s->PASSWORD ?>
                    </td>
                    <td>
                      <?php echo $s->STATUS ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/Penggunaan/edit/'.$s->ID_LOGIN) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
          <a onclick="deleteConfirm('<?php echo site_url('admin/Penggunaan/delete/'.$s->ID_LOGIN) ?>')"
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
               <form action="<?php echo site_url('admin/Penggunaan') ?>" method="post" enctype="multipart/form-data" >

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_PENGAJAR">pengguna</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_PENGAJAR') ? 'is-invalid':'' ?>" name="ID_PENGAJAR"> 
                  <option selected></option>
                  <?php foreach ($pengguna2 as $s2): ?>
                  <option value="<?php echo $s2->ID_PENGAJAR ?>"><?php echo $s2->NAMA_PENGAJAR ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

               <div class="form-group">
                <label for="USERNAME">USERNAME*</label>
                <input class="form-control <?php echo form_error('USERNAME') ? 'is-invalid':'' ?>"
                 type="text" name="USERNAME" placeholder="Username" />
                <div class="invalid-feedback">
                  <?php echo form_error('USERNAME') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="PASSWORD">PASSWORD*</label>
                <input class="form-control <?php echo form_error('PASSWORD') ? 'is-invalid':'' ?>"
                 type="password" name="PASSWORD" placeholder="PASSWORD" />
                <div class="invalid-feedback">
                  <?php echo form_error('PASSWORD') ?>
                </div>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_STATUS">Status</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_STATUS') ? 'is-invalid':'' ?>" name="ID_STATUS"> 
                  <option selected></option>
                  <option value="ADMIN">ADMIN</option>
                  <option value="GURU">GURU</option>
                </select>
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