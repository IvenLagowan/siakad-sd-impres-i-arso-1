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
          Tambah Siswa
        </button>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Ruangan</th>
                    <th>Kota</th>
                    <th>Jenis Kelamin</th>
                    <th>Wali Murid</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($kondisi as $s): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $s->NIS ?>
                    </td>
                    <td width="120">
                      <?php echo $s->NAMA_SISWA ?>
                    </td>
                    <td width="100">
                      <?php echo $s->TINGKAT_KELAS ?>
                    </td>
                    <td width="100">
                      <?php echo $s->NAMA_RUANG ?>
                    </td>
                    <td width="100">
                      <?php echo $s->NAMA_KOTA ?>
                    </td>
                    <td width="120">
                      <?php echo $s->JENIS_KELAMIN ?>
                    </td>
                    <td width="100">
                      <?php echo $s->WALI_MURID ?>
                    </td>
                    <td width="100">
                      <?php echo $s->ALAMAT_SISWA ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/product/'.$s->FOTO_SISWA) ?>" width="64" />
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/Siswa/edit/'.$s->ID_SISWA) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
          <a onclick="deleteConfirm('<?php echo site_url('admin/Siswa/delete/'.$s->ID_SISWA) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
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
               <form action="<?php echo site_url('admin/Siswa') ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                <label for="NIS">NIS*</label>
                <input class="form-control <?php echo form_error('NIS') ? 'is-invalid':'' ?>"
                 type="number" name="NIS" placeholder="NIS" />
                <div class="invalid-feedback">
                  <?php echo form_error('NIS') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="NAMA_SISWA">Nama Siswa*</label>
                <input class="form-control <?php echo form_error('NAMA_SISWA') ? 'is-invalid':'' ?>"
                 type="text" name="NAMA_SISWA" placeholder="Nama Siswa" />
                <div class="invalid-feedback">
                  <?php echo form_error('NAMA_SISWA') ?>
                </div>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_KELAS">Kelas</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_KELAS') ? 'is-invalid':'' ?>" name="ID_KELAS"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($siswa3 as $s3): ?>
                  <option value="<?php echo $s3->ID_KELAS ?>"><?php echo $s3->TINGKAT_KELAS?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_RUANG">Ruangan</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_RUANG') ? 'is-invalid':'' ?>" name="ID_RUANG"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($siswa4 as $s4): ?>
                  <option value="<?php echo $s4->ID_RUANG ?>"><?php echo $s4->NAMA_RUANG ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_KOTA">Kota</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_KOTA') ? 'is-invalid':'' ?>" name="ID_KOTA"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($siswa2 as $s2): ?>
                  <option value="<?php echo $s2->ID_KOTA ?>"><?php echo $s2->NAMA_KOTA ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
              <label class="input-group-text" for="JENIS_KELAMIN">Jenis Kelamin*</label>
              <div class="form-check">
                
                <input class="form-check-input <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>" type="radio" value="L" name="JENIS_KELAMIN">
                <label class="form-check-label" for="JENIS_KELAMIN"> L </label>
              </div>
              <div class="form-check">
              <input class="form-check-input <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>" type="radio" value="P" name="JENIS_KELAMIN">
                <label class="form-check-label" for="JENIS_KELAMIN"> P </label>
                <div class="invalid-feedback">
                  <?php echo form_error('JENIS_KELAMIN') ?>
                </div>
              </div>
              </div>

              <div class="form-group">
                <label for="WALI_MURID">Wali Murid*</label>
                <input class="form-control <?php echo form_error('WALI_MURID') ? 'is-invalid':'' ?>"
                 type="text" name="WALI_MURID" placeholder="WALI_MURID" />
                <div class="invalid-feedback">
                  <?php echo form_error('WALI_MURID') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="ALAMAT_SISWA">Alamat*</label>
                <textarea class="form-control <?php echo form_error('ALAMAT_SISWA') ? 'is-invalid':'' ?>"
                 name="ALAMAT_SISWA" placeholder="Alamat..."></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('ALAMAT_SISWA') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="FOTO_SISWA">Foto</label>
                <input class="form-control-file <?php echo form_error('FOTO_SISWA') ? 'is-invalid':'' ?>"
                 type="file" name="FOTO_SISWA" />
                <input type="hidden" name="FOTO_SISWA" value="" />
                <div class="invalid-feedback">
                  <?php echo form_error('FOTO_SISWA') ?>
                </div>
              </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
              </div>
              <div class="modal-footer">
                <div class="card-footer small text-muted">
            <h5>field tanda * Harus Di isi</h5>
          </div>
              </div>
            </div>
          </div>
        </div>