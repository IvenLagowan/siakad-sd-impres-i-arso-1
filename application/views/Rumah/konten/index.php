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
                    <th><h2>Pengumuman</h2></th>
                  </tr>
                </thead>
                <tbody>  <?php $no=1; foreach ($kondisi as $b): ?>
                  <tr>
                    <td bgcolor="green"><h3> <?php echo $b->ISI ?> </h3></td>
                    </tr>
                  

                </tbody>
              </table>

  <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><h2>Tahun Akademik</h2></th>
                    <th><h2>Semester</h2></th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td bgcolor="aqua"><h3><?php echo $b->TAHUN_AJARAN ?></h3>
                      
                    </td>
                    <td  bgcolor="aqua" width="150">
                      <h3><?php echo $b->NAMA_SEMESTER ?></h3>
                      
                    </td>
                  </tr>
                  
<?php endforeach; ?>
                </tbody>
              </table>

            
              
            </div>
          </div>
        </div>