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
                    <th>Kelas</th>
                    <th>Pelajaran</th>
                    <th>Semester</th>
                    <th>Pengajar</th>
                    <th>Jam</th>
                    <th>Hari</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($jadwal2 as $j): ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td >
                      <?php echo $j->NAMA_RUANG ?>
                    </td>
                    <td width="100">
                      <?php echo $j->NAMA_PELAJARAN ?>
                    </td>
                    <td>
                      <?php echo $j->NAMA_SEMESTER ?>
                    </td>
                    <td width="100">
                      <?php echo $j->NAMA_PENGAJAR ?>
                    </td>
                    <td>
                      <?php echo $j->WAKTU ?>
                    </td>
                    <td>
                      <?php echo $j->NAMA_HARI ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>