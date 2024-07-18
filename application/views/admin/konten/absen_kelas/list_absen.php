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
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Ruangan</th>
                    <th>Kota</th>
                    <th>Jenis Kelamin</th>
                    <th>Wali Murid</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($kondisi as $s): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $s->NIS ?>
                    </td>
                    <td width="120">
                      <?php echo $s->NAMA_SISWA ?>
                    </td>
                    <td width="100">
                      <?php echo $s->TINGKAT_KELAS ?>
                    </td>
                    <td width="100">
                      <?php echo $s->NAMA_RUANG ?>
                    </td>
                    <td width="100">
                      <?php echo $s->NAMA_KOTA ?>
                    </td>
                    <td width="120">
                      <?php echo $s->JENIS_KELAMIN ?>
                    </td>
                    <td width="100">
                      <?php echo $s->WALI_MURID ?>
                    </td>
                    <td width="100">
                      <?php echo $s->ALAMAT_SISWA ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/product/'.$s->FOTO_SISWA) ?>" width="64" />
                    </td>
                    
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>