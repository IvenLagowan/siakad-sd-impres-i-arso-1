<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo $this->uri->segment('2')?>"><?php echo $this->uri->segment('2')?></a>
    </li>
    <li class="breadcrumb-item active"><?php echo $this->uri->segment('3')?></li>
  </ol>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Info Kelas</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Wali Kelas</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Aan</td>
              <td>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/lihat'); ?>">
              <i class="fas fa-fw fa-eye"></i></a>
              <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Tombol/edit'); ?>">
              <i class="fas fa-fw fa-edit"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('index.php/admin/Tombol/hapus'); ?>">
              <i class="fas fa-fw fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Absen Kelas 1</div>
    <div class="card-body">
    <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/cetak'); ?>">
    <i class="fas fa-fw fa-print"></i> cetak data absen</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>A Imam Taufik</td>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <th>sakit</th>
              <th>masuk</th>
              <td>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/lihat'); ?>">
              <i class="fas fa-fw fa-eye"></i></a>
              <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Tombol/edit'); ?>">
              <i class="fas fa-fw fa-edit"></i></a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Aas Nurismah</td>
              <th>masuk</th>
              <th>ijin</th>
              <th>masuk</th>
              <th>sakit</th>
              <th>masuk</th>
              <td>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/lihat'); ?>">
              <i class="fas fa-fw fa-eye"></i></a>
              <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Tombol/edit'); ?>">
              <i class="fas fa-fw fa-edit"></i></a>

              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Aat Rahmawati</td>
              <th>alfa</th>
              <th>masuk</th>
              <th>masuk</th>
              <th>sakit</th>
              <th>masuk</th>
              <td>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/lihat'); ?>">
              <i class="fas fa-fw fa-eye"></i></a>
              <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Tombol/edit'); ?>">
              <i class="fas fa-fw fa-edit"></i></a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Abdul Gofur</td>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <td>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/lihat'); ?>">
              <i class="fas fa-fw fa-eye"></i></a>
              <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Tombol/edit'); ?>">
              <i class="fas fa-fw fa-edit"></i></a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Abdul Jaman</td>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <th>masuk</th>
              <td>
              <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Tombol/lihat'); ?>">
              <i class="fas fa-fw fa-eye"></i></a>
              <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Tombol/edit'); ?>">
              <i class="fas fa-fw fa-edit"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>
<!-- /.container-fluid -->
