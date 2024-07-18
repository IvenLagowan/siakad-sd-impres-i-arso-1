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

						<a href="<?php echo site_url('admin/Guru/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/Guru/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $pengajar->ID_PENGAJAR?>" />

							<div class="form-group">
								<label for="NIP">NIP*</label>
								<input class="form-control <?php echo form_error('NIP') ? 'is-invalid':'' ?>"
								 type="text" name="NIP" placeholder="NIP" value="<?php echo $pengajar->NIP ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NIP') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="NAMA_PENGAJAR">Nama Guru*</label>
								<input class="form-control <?php echo form_error('NAMA_PENGAJAR') ? 'is-invalid':'' ?>"
								 type="text" name="NAMA_PENGAJAR" placeholder="Nama Pengajar" value="<?php echo $pengajar->NAMA_PENGAJAR ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA_PENGAJAR') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ALAMAT_PENGAJAR">Alamat*</label>
								<textarea class="form-control <?php echo form_error('ALAMAT_PENGAJAR') ? 'is-invalid':'' ?>"
								 name="ALAMAT_PENGAJAR" placeholder="Alamat..."><?php echo $pengajar->ALAMAT_PENGAJAR ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('ALAMAT_PENGAJAR') ?>
								</div>
							</div>

							<div class="form-group">
				              <label class="input-group-text" for="JK">Jenis Kelamin*</label>
				              <div class="form-check">
				                
				                <input class="form-check-input <?php echo form_error('JK') ? 'is-invalid':'' ?>" type="radio" value="L" <?php if ($pengajar->JK == 'L'){echo "checked";} ?> name="JK">
				                <label class="form-check-label" for="JK"> L </label>
				              </div>
				              <div class="form-check">
				              <input class="form-check-input <?php echo form_error('JK') ? 'is-invalid':'' ?>" type="radio" value="P" <?php if ($pengajar->JK == 'P'){echo "checked";} ?> name="JK">
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
								<input type="hidden" name="FOTO" value="<?php echo $pengajar->FOTO ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('FOTO') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>