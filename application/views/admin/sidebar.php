 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/Guru'); ?>">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Data Guru</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/Siswa'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Siswa</span>
        </a>
      </li>
      <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-id-badge"></i>
          <span>Data Absen Siswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('admin/Siswa/kelas1'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 1</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Siswa/kelas2'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 2</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Siswa/kelas3'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 3</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Siswa/kelas4'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 4</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Siswa/kelas5'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 5</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Siswa/kelas6'); ?>">
          <i class="fas fa-fw fa-users"></i>  Kelas 6</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-list"></i>
          <span>Data Master</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('admin/Pelajaran'); ?>">
          <i class="fas fa-fw fa-book"></i>  Data Pelajaran</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Ruang'); ?>">
          <i class="fas fa-fw fa-building"></i>  Ruang Kelas</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Kelas'); ?>">
          <i class="fas fa-fw fa-sitemap"></i>  Tingkat Kelas</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Tahun'); ?>">
          <i class="fas fa-fw fa-calendar-check"></i>  Tahun Akademik</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Wali'); ?>">
          <i class="fas fa-fw fa-user-plus"></i>  Wali Kelas</a>
        </div>
         
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/jadwal'); ?>">
          <i class="fas fa-fw fa-calendar-plus"></i>
          <span>Jadwal Pelajaran</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/Pengumuman'); ?>">
          <i class="fas fa-fw fa-file"></i>
          <span>Pengumuman</span>
        </a>
      </li>
      <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-cog"></i>
          <span>Pengaturan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('admin/Penggunaan'); ?>">
          <i class="fas fa-fw fa-user"></i>  User</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/Pengaturan'); ?>">
          <i class="fas fa-fw fa-university"></i>  Profil Sekolah</a>
        </div>
      </li>
    </ul>