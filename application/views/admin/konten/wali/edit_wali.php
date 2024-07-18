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

						<a href="<?php echo site_url('admin/Wali/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/Wali/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $wali->ID_WALIKELAS?>" />			

							<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_PENGAJAR">Nama Guru</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_PENGAJAR') ? 'is-invalid':'' ?>" name="ID_PENGAJAR"> 
                  <?php foreach ($guru as $s2): ?>
                  <option value="<?php echo $s2->ID_PENGAJAR?>" <?php if ($wali->ID_PENGAJAR == $s2->ID_PENGAJAR){echo "selected";} ?> ><?php echo $s2->NAMA_PENGAJAR?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_RUANG">Wali Kelas</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_RUANG') ? 'is-invalid':'' ?>" name="ID_RUANG"> 
                  <?php foreach ($ruang as $s): ?>
                  <option value="<?php echo $s->ID_RUANG?>" <?php if ($wali->ID_RUANG == $s->ID_RUANG){echo "selected";} ?> ><?php echo $s->NAMA_RUANG ?></option>
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