
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

						<a href="<?php echo site_url('admin/Tahun/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/Tahun/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $tahun->ID_TAHUN?>" />

							<div class="form-group">
								<label for="TAHUN_AJARAN">Tahun Akademik*</label>
								<input class="form-control <?php echo form_error('TAHUN_AJARAN') ? 'is-invalid':'' ?>"
								 type="text" name="TAHUN_AJARAN" placeholder="Tahun Akademik" value="<?php echo $tahun
								 ->TAHUN_AJARAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('TAHUN_AJARAN') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>