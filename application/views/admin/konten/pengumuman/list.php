    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
          </div>
          <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" width="100%" cellspacing="0">
  <thead>
                  <tr>
                    <th>Pengumuman</th>
                  </tr>
                </thead>
                <tbody>  <?php foreach ($kondisi as $b): ?>
                  <tr>
                    <td> <h3><?php echo $b->ISI ?></h3>   </td>
                    </tr>
                  

                </tbody>
              </table>

  <table class="table table-bordered"width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Tahun Akademik</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>
                      <?php echo $b->TAHUN_AJARAN ?>
                    </td>
                    <td width="150">
                      <?php echo $b->NAMA_SEMESTER ?>
                    </td>
                    <td>   <a href="<?php echo site_url('admin/Pengumuman/edit/'.$b->ID_PENGUMUMAN) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> </td>
                  </tr>
                  
<?php endforeach; ?>
                </tbody>
              </table>

            
              
            </div>
          </div>
        </div>