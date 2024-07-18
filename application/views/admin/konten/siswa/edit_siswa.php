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

            <a href="<?php echo site_url('admin/Siswa/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?= site_url('admin/Siswa/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $siswa->ID_SISWA?>" />

              <div class="form-group">
                <label for="NIS">NIS*</label>
                <input class="form-control <?php echo form_error('NIS') ? 'is-invalid':'' ?>"
                 type="number" name="NIS" placeholder="NIS" value="<?php echo $siswa->NIS ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('NIS') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="NAMA_SISWA">Nama Siswa*</label>
                <input class="form-control <?php echo form_error('NAMA_SISWA') ? 'is-invalid':'' ?>"
                 type="text" name="NAMA_SISWA" placeholder="Nama Siswa" value="<?php echo $siswa->NAMA_SISWA ?>" />
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
                  <option value="<?php echo $s3->ID_KELAS ?>" <?php if ($siswa->ID_KELAS == $s3->ID_KELAS){echo "selected";} ?>><?php echo $s3->TINGKAT_KELAS?></option>
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
                  <option value="<?php echo $s4->ID_RUANG ?>" <?php if ($siswa->ID_RUANG == $s4->ID_RUANG){echo "selected";} ?>><?php echo $s4->NAMA_RUANG ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_KOTA">Kota</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_KOTA') ? 'is-invalid':'' ?>" name="ID_KOTA"> 
                  <?php foreach ($siswa2 as $s2): ?>
                  <option value="<?php echo $s2->ID_KOTA ?>" <?php if ($siswa->ID_KOTA == $s2->ID_KOTA){echo "selected";} ?> ><?php echo $s2->NAMA_KOTA ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
              <label class="input-group-text" for="JENIS_KELAMIN">Jenis Kelamin*</label>
              <div class="form-check">
                
                <input class="form-check-input <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>" type="radio" value="L" <?php if ($siswa->JENIS_KELAMIN == 'L'){echo "checked";} ?> name="JENIS_KELAMIN">
                <label class="form-check-label" for="JENIS_KELAMIN"> L </label>
              </div>
              <div class="form-check">
              <input class="form-check-input <?php echo form_error('JENIS_KELAMIN') ? 'is-invalid':'' ?>" type="radio" value="P" <?php if ($siswa->JENIS_KELAMIN == 'P'){echo "checked";} ?> name="JENIS_KELAMIN">
                <label class="form-check-label" for="JENIS_KELAMIN"> P </label>
                <div class="invalid-feedback">
                  <?php echo form_error('JENIS_KELAMIN') ?>
                </div>
              </div>
              </div>

              <div class="form-group">
                <label for="ALAMAT_SISWA">Alamat*</label>
                <textarea class="form-control <?php echo form_error('ALAMAT_SISWA') ? 'is-invalid':'' ?>"
                 name="ALAMAT_SISWA" placeholder="Alamat..."><?php echo $siswa->ALAMAT_SISWA ?>"</textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('ALAMAT_SISWA') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="WALI_MURID">Wali Murid*</label>
                <input class="form-control <?php echo form_error('WALI_MURID') ? 'is-invalid':'' ?>"
                 type="text" name="WALI_MURID" placeholder="WALI_MURID" value="<?php echo $siswa->WALI_MURID ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('WALI_MURID') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="FOTO_SISWA">Foto</label>
                <input class="form-control-file <?php echo form_error('FOTO_SISWA') ? 'is-invalid':'' ?>"
                 type="file" name="FOTO_SISWA" />
                <input type="hidden" name="FOTO_SISWA" value="<?php echo $siswa->FOTO_SISWA ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('FOTO_SISWA') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>