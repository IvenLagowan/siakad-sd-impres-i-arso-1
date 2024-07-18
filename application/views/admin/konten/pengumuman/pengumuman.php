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

            <a href="<?php echo site_url('admin/Pengumuman/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?= site_url('admin/Pengumuman/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $pengumuman->ID_PENGUMUMAN?>" />

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_TAHUN">TAHUN</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_TAHUN') ? 'is-invalid':'' ?>" name="ID_TAHUN"> 
                  <?php foreach ($tahun as $s2): ?>
                  <option value="<?php echo $s2->ID_TAHUN ?>" <?php if ($pengumuman->ID_TAHUN == $s2->ID_TAHUN){echo "selected";} ?> ><?php echo $s2->TAHUN_AJARAN ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_SEMESTER">SEMESTER</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_SEMESTER') ? 'is-invalid':'' ?>" name="ID_SEMESTER"> 
                  <?php foreach ($semester as $s): ?>
                  <option value="<?php echo $s->ID_SEMESTER ?>" <?php if ($pengumuman->ID_SEMESTER == $s->ID_SEMESTER){echo "selected";} ?> ><?php echo $s->NAMA_SEMESTER ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="ISI">Pengumuman*</label>
                <textarea class="form-control <?php echo form_error('ISI') ? 'is-invalid':'' ?>"
                 name="ISI" placeholder="Isi pengumuman"><?php echo $pengumuman->ISI ?>"</textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('ISI') ?>
                </div>
              </div>
              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>