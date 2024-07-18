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
          Tambah Jadwal Pelajaran
        </button>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Pelajaran</th>
                    <th>Semester</th>
                    <th>Pengajar</th>
                    <th>Jam</th>
                    <th>Hari</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($kondisi as $j): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td >
                      <?php echo $j->NAMA_RUANG ?>
                    </td>
                    <td width="100">
                      <?php echo $j->NAMA_PELAJARAN ?>
                    </td>
                    <td>
                      <?php echo $j->NAMA_SEMESTER ?>
                    </td>
                    <td width="100">
                      <?php echo $j->NAMA_PENGAJAR ?>
                    </td>
                    <td>
                      <?php echo $j->WAKTU ?>
                    </td>
                    <td>
                      <?php echo $j->NAMA_HARI ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/Jadwal/edit/'.$j->ID_JADWAL) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
          <a onclick="deleteConfirm('<?php echo site_url('admin/Jadwal/delete/'.$j->ID_JADWAL) ?>')"
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
               <form action="<?php echo site_url('admin/Jadwal') ?>" method="post" enctype="multipart/form-data" >

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_RUANG">Kelas</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_RUANG') ? 'is-invalid':'' ?>" name="ID_RUANG"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal2 as $j2): ?>
                  <option value="<?php echo $j2->ID_RUANG ?>"><?php echo $j2->NAMA_RUANG ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="KODE_PELAJARAN">Pelajaran</label>
                </div>
              <select class="custom-select <?php echo form_error('KODE_PELAJARAN') ? 'is-invalid':'' ?>" name="KODE_PELAJARAN"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal3 as $j3): ?>
                  <option value="<?php echo $j3->KODE_PELAJARAN ?>"><?php echo $j3->NAMA_PELAJARAN ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_SEMESTER">Semester</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_SEMESTER') ? 'is-invalid':'' ?>" name="ID_SEMESTER"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal4 as $j4): ?>
                  <option value="<?php echo $j4->ID_SEMESTER ?>"><?php echo $j4->NAMA_SEMESTER ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_PENGAJAR">Pengajar</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_PENGAJAR') ? 'is-invalid':'' ?>" name="ID_PENGAJAR"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal5 as $j5): ?>
                  <option value="<?php echo $j5->ID_PENGAJAR ?>"><?php echo $j5->NAMA_PENGAJAR ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_JAM">Jam Pelajaran</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_JAM') ? 'is-invalid':'' ?>" name="ID_JAM"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal6 as $j6): ?>
                  <option value="<?php echo $j6->ID_JAM ?>"><?php echo $j6->WAKTU ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_HARI">Hari</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_HARI') ? 'is-invalid':'' ?>" name="ID_HARI"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal7 as $j7): ?>
                  <option value="<?php echo $j7->ID_HARI ?>"><?php echo $j7->NAMA_HARI ?></option>
                  <?php endforeach; ?>
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