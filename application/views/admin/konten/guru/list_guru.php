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
          Tambah Guru
        </button>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($pengajar as $p): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $p->NIP ?>
                    </td>
                    <td width="150">
                      <?php echo $p->NAMA_PENGAJAR ?>
                    </td>
                    <td>
                      <?php echo $p->ALAMAT_PENGAJAR ?>
                    </td>
                    <td>
                      <?php echo $p->JK ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/product/'.$p->FOTO) ?>" width="64" />
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/Guru/edit/'.$p->ID_PENGAJAR) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
          <a onclick="deleteConfirm('<?php echo site_url('admin/Guru/delete/'.$p->ID_PENGAJAR) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        

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
               <form action="<?php echo site_url('admin/Guru') ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                <label for="NIP">NIP*</label>
                <input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
                 type="number" name="NIP" placeholder="NIP" />
                <div class="invalid-feedback">
                  <?php echo form_error('NIP') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="NAMA_PENGAJAR">Nama Guru*</label>
                <input class="form-control <?php echo form_error('NAMA_PENGAJAR') ? 'is-invalid':'' ?>"
                 type="text" name="NAMA_PENGAJAR" placeholder="Nama Guru" />
                <div class="invalid-feedback">
                  <?php echo form_error('NAMA_PENGAJAR') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="ALAMAT_PENGAJAR">Alamat*</label>
                <textarea class="form-control <?php echo form_error('ALAMAT_PENGAJAR') ? 'is-invalid':'' ?>"
                 name="ALAMAT_PENGAJAR" placeholder="Alamat..."></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('ALAMAT_PENGAJAR') ?>
                </div>
              </div>

              <div class="form-group">
              <label class="input-group-text" for="JK">Jenis Kelamin*</label>
              <div class="form-check">
                
                <input class="form-check-input <?php echo form_error('JK') ? 'is-invalid':'' ?>" type="radio" value="L" name="JK">
                <label class="form-check-label" for="JK"> L </label>
              </div>
              <div class="form-check">
              <input class="form-check-input <?php echo form_error('JK') ? 'is-invalid':'' ?>" type="radio" value="P" name="JK">
                <label class="form-check-label" for="JK"> P </label>
                <div class="invalid-feedback">
                  <?php echo form_error('JK') ?>
                </div>
              </div>
              </div>

              <div class="form-group">
                <label for="FOTO">Foto</label>
                <input class="form-control-file <?php echo form_error('FOTO') ? 'is-invalid':'' ?>"
                 type="file" name="FOTO" />
                <input type="hidden" name="FOTO" value="" />
                <div class="invalid-feedback">
                  <?php echo form_error('FOTO') ?>
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
