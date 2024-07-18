    <div id="content-wrapper">

      <div class="container-fluid">
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <tbody> <?php foreach ($kondisi as $s): ?>
                  <tr>
                    <td>NSS</td>
                    <td>   <?php echo $s->NSS ?> </td>
                    </tr>
                  <tr>
                    <td>Kepala Sekolah</td>
                    <td>   <?php echo $s->NAMA_PENGAJAR ?> </td>
                    </tr>
                  <tr>
                    <td>Nama Sekolah</td>
                    <td>   <?php echo $s->NAMA_SEKOLAH ?> </td>
                    </tr>
                  <tr>
                    <td>Tanggal Pendirian</td>
                    <td>   <?php echo $s->TGL_PENDIRIAN ?> </td>
                    </tr>
                  <tr>
                    <td>Status Sekolah</td>
                    <td>   <?php echo $s->STATUS_SEKOLAH ?>  </td>
                    </tr>
                  <tr>
                    <td>Akreditasi</td>
                    <td>   <?php echo $s->AKREDITASI ?> </td>
                    </tr>
                  <tr>
                    <td>Alamat Sekolah</td>
                    <td>   <?php echo $s->ALAMAT_SEKOLAH ?> </td>
                    </tr>
                  <tr>
                    <td>Email</td>
                    <td>   <?php echo $s->EMAIL ?> </td>
                    </tr>
                  <tr>
                    <td>Aksi</td>
                    <td>   <a href="<?php echo site_url('admin/Pengaturan/edit/'.$s->NSS) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>