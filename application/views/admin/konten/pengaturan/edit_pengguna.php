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

            <a href="<?php echo site_url('admin/Penggunaan/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?= site_url('admin/Penggunaan/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $pengguna->ID_LOGIN?>" />

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_PENGAJAR">pengguna</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_PENGAJAR') ? 'is-invalid':'' ?>" name="ID_PENGAJAR"> 
                  <?php foreach ($pengguna2 as $s2): ?>
                  <option value="<?php echo $s2->ID_PENGAJAR ?>" <?php if ($pengguna->ID_PENGAJAR == $s2->ID_PENGAJAR){echo "selected";} ?> ><?php echo $s2->NAMA_PENGAJAR ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

               <div class="form-group">
                <label for="USERNAME">USERNAME*</label>
                <input class="form-control <?php echo form_error('USERNAME') ? 'is-invalid':'' ?>"
                 type="text" name="USERNAME" placeholder="Username" value="<?php echo $pengguna->USERNAME ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('USERNAME') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="PASSWORD">PASSWORD*</label>
                <input class="form-control <?php echo form_error('PASSWORD') ? 'is-invalid':'' ?>"
                 type="password" name="PASSWORD" placeholder="PASSWORD" value="<?php echo $pengguna->PASSWORD ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('PASSWORD') ?>
                </div>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_STATUS">Status</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_STATUS') ? 'is-invalid':'' ?>" name="ID_STATUS">
                  <option value="ADMIN"<?php if ($pengguna->STATUS == 'ADMIN'){echo "selected";} ?> >ADMIN</option>
                  <option value="GURU"<?php if ($pengguna->STATUS == 'GURU'){echo "selected";} ?> >GURU</option>
                </select>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>