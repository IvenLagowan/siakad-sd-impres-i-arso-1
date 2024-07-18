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

						<a href="<?php echo site_url('admin/kelas/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/Kelas/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $kelas->ID_KELAS?>" />

							<div class="form-group">
								<label for="TINGKAT_KELAS">Tingkat*</label>
								<input class="form-control <?php echo form_error('TINGKAT_KELAS') ? 'is-invalid':'' ?>"
								 type="text" name="TINGKAT_KELAS" placeholder="Nama Pelajaran" value="<?php echo $kelas->TINGKAT_KELAS ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TINGKAT_KELAS') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KETERANGAN">Keterangan</label>
								<input class="form-control <?php echo form_error('KETERANGAN') ? 'is-invalid':'' ?>"
								 type="text" name="KETERANGAN" min="0" placeholder="KETERANGAN" value="<?php echo $kelas->KETERANGAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KETERANGAN') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>