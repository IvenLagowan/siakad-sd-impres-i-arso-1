<div id="content-wrapper">

      <div class="container-fluid">

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <!-- Card  -->
        <div class="card mb-3">
          <div class="card-header">

            <a href="<?php echo site_url('admin/Pengaturan/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?= site_url('admin/Pengaturan/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $profil->NSS?>" />

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_PENGAJAR">Kepala Sekolah</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_PENGAJAR') ? 'is-invalid':'' ?>" name="ID_PENGAJAR"> 
                  <?php foreach ($profil2 as $s2): ?>
                  <option value="<?php echo $s2->ID_PENGAJAR ?>" <?php if ($profil->ID_PENGAJAR == $s2->NAMA_PENGAJAR){echo "selected";} ?> ><?php echo $s2->NAMA_PENGAJAR ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

             <div class="form-group">
                <label for="NAMA_SEKOLAH">Nama Sekolah*</label>
                <input class="form-control <?php echo form_error('NAMA_SEKOLAH') ? 'is-invalid':'' ?>"
                 type="text" name="NAMA_SEKOLAH" placeholder="Nama Sekolah" value="<?php echo $profil->NAMA_SEKOLAH ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('NAMA_SEKOLAH') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="TGL_PENDIRIAN">Tanggal Pendirian*</label>
                <input class="form-control <?php echo form_error('TGL_PENDIRIAN') ? 'is-invalid':'' ?>"
                 type="text" name="TGL_PENDIRIAN" placeholder="Tanggal Pendirian" value="<?php echo $profil->TGL_PENDIRIAN ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('TGL_PENDIRIAN') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="STATUS_SEKOLAH">Status Sekolah*</label>
                <input class="form-control <?php echo form_error('STATUS_SEKOLAH') ? 'is-invalid':'' ?>"
                 type="text" name="STATUS_SEKOLAH" placeholder="Status Sekolah" value="<?php echo $profil->STATUS_SEKOLAH ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('STATUS_SEKOLAH') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="AKREDITASI">Akreditasi*</label>
                <input class="form-control <?php echo form_error('AKREDITASI') ? 'is-invalid':'' ?>"
                 type="text" name="AKREDITASI" placeholder="Akreditasi" value="<?php echo $profil->AKREDITASI ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('AKREDITASI') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="ALAMAT_SEKOLAH">Alamat*</label>
                <textarea class="form-control <?php echo form_error('ALAMAT_SEKOLAH') ? 'is-invalid':'' ?>"
                 name="ALAMAT_SEKOLAH" placeholder="Alamat..."><?php echo $profil->ALAMAT_SEKOLAH ?>"</textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('ALAMAT_SEKOLAH') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="EMAIL">Email*</label>
                <input class="form-control <?php echo form_error('EMAIL') ? 'is-invalid':'' ?>"
                 type="text" name="EMAIL" placeholder="Email" value="<?php echo $profil->EMAIL ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('EMAIL') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>