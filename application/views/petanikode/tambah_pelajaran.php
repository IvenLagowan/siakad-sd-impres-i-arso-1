<div id="content-wrapper">

			<div class="container-fluid">
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Pelajaran/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/Pelajaran/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="NAMA_PELAJARAN">Mata Pelajaran*</label>
								<input class="form-control <?php echo form_error('NAMA_PELAJARAN') ? 'is-invalid':'' ?>"
								 type="text" name="NAMA_PELAJARAN" placeholder="Mata Pelajaran" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA_PELAJARAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KURIKULUM">Kurikulum*</label>
								<input class="form-control <?php echo form_error('KURIKULUM') ? 'is-invalid':'' ?>"
								 type="number" name="KURIKULUM" placeholder="Kurikulum" />
								<div class="invalid-feedback">
									<?php echo form_error('KURIKULUM') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
					</div>

					



