 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('rumah/Rumah'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-id-badge"></i>
          <span>Data Absen Siswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('rumah/absen_kelas'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 1</a>
          <a class="dropdown-item" href="<?php echo base_url('rumah/absen_kelas/kelas2'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 2</a>
          <a class="dropdown-item" href="<?php echo base_url('rumah/absen_kelas/kelas3'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 3</a>
          <a class="dropdown-item" href="<?php echo base_url('rumah/absen_kelas/kelas4'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 4</a>
          <a class="dropdown-item" href="<?php echo base_url('rumah/absen_kelas/kelas5'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 5</a>
          <a class="dropdown-item" href="<?php echo base_url('rumah/absen_kelas/kelas6'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 6</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('rumah/Rumah/jadwal'); ?>" name="id2">
          <i class="fas fa-fw fa-book"></i>
          <span>Jadwal Pelajaran</span>
        </a>
      </li>
    </ul>