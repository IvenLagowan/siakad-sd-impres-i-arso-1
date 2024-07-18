

        <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Semester</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                <label for="firstName">Tahun Ajaran</label>
            </div>
        </div>
                   
          <div class="form-group">
            <div class="form-label-group">
              <select name="jenis_kelamin">
            <option>Ganjil</option>
            <option>Genap</option>
        </select>
            </div>
          </div>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/Pengajar/guru'); ?>">Tambah</a>
          <a class="btn btn-success" href="<?php echo base_url('index.php/admin/Pengajar/guru'); ?>">Kembali</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>