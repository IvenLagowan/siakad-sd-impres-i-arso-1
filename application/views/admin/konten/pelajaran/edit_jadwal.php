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

            <a href="<?php echo site_url('admin/Jadwal/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?= site_url('admin/Jadwal/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $jadwal->ID_JADWAL?>" />

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_RUANG">Kelas</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_RUANG') ? 'is-invalid':'' ?>" name="ID_RUANG"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($jadwal2 as $j2): ?>
                  <option value="<?php echo $j2->ID_RUANG ?>"<?php if ($jadwal->ID_RUANG == $j2->ID_RUANG){echo "selected";} ?>><?php echo $j2->NAMA_RUANG ?></option>
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
                  <option value="<?php echo $j3->KODE_PELAJARAN ?>"<?php if ($jadwal->KODE_PELAJARAN == $j3->KODE_PELAJARAN){echo "selected";} ?>><?php echo $j3->NAMA_PELAJARAN ?></option>
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
                  <option value="<?php echo $j4->ID_SEMESTER ?>"<?php if ($jadwal->ID_SEMESTER == $j4->ID_SEMESTER){echo "selected";} ?>><?php echo $j4->NAMA_SEMESTER ?></option>
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
                  <option value="<?php echo $j5->ID_PENGAJAR ?>"<?php if ($jadwal->ID_PENGAJAR == $j5->ID_PENGAJAR){echo "selected";} ?>><?php echo $j5->NAMA_PENGAJAR ?></option>
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
                  <option value="<?php echo $j6->ID_JAM ?>"<?php if ($jadwal->ID_JAM == $j6->ID_JAM){echo "selected";} ?>><?php echo $j6->WAKTU ?></option>
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
                  <option value="<?php echo $j7->ID_HARI ?>"<?php if ($jadwal->ID_HARI == $j7->ID_HARI){echo "selected";} ?>><?php echo $j7->NAMA_HARI ?></option>
                  <?php endforeach; ?>
                </select>
              </div>




              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>