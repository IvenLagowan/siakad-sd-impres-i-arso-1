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

						<a href="<?php echo site_url('admin/Ruang/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/Ruang/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $ruang->ID_RUANG?>" />

							<div class="form-group">
								<label for="NAMA_RUANG">Tingkat*</label>
								<input class="form-control <?php echo form_error('NAMA_RUANG') ? 'is-invalid':'' ?>"
								 type="text" name="NAMA_RUANG" placeholder="Nama Pelajaran" value="<?php echo $ruang
								 ->NAMA_RUANG ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA_RUANG') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>