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

						<a href="<?php echo site_url('admin/Pelajaran/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?= site_url('admin/Pelajaran/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $belajar->KODE_PELAJARAN?>" />

							<div class="form-group">
								<label for="NAMA_PELAJARAN">Nama Pelajaran*</label>
								<input class="form-control <?php echo form_error('NAMA_PELAJARAN') ? 'is-invalid':'' ?>"
								 type="text" name="NAMA_PELAJARAN" placeholder="Nama Pelajaran" value="<?php echo $belajar->NAMA_PELAJARAN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NAMA_PELAJARAN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="KURIKULUM">Kurikulum</label>
								<input class="form-control <?php echo form_error('KURIKULUM') ? 'is-invalid':'' ?>"
								 type="number" name="KURIKULUM" min="0" placeholder="Kurikulum" value="<?php echo $belajar->KURIKULUM ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('KURIKULUM') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>