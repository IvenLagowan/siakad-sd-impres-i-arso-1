    <div id="content-wrapper">

      <div class="container-fluid">
<!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-cart-plus"></i>
          Tambah Product
        </button>
       
        <div class="card mb-3">
          <div class="card-header">
            <h3>Daftar <?= $subjudul; ?></h3>
            <?= $this->session->flashdata('pesan'); ?>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($product as $p):?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p['name']; ?></td>
                    <td><?= $p['price']; ?></td>
                    <td><img class="img-circle img-responsive" width="10%" src="<?= base_url('assets/image/').$p['image']; ?>"></td>
                    <td><?= $p['description']; ?></td>
                    <td>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('semester/product/hapus_product/').$p['product_id'];  ?>"><i class="fa fa-trash"></i></a>
                      <a class="btn btn-primary btn-sm" href="<?= base_url('semester/product/update/').$p['product_id'];  ?>"><i class="fa fa-edit"></i></a>

                      <a class="btn btn-warning btn-sm" href="<?= base_url('semester/product/lihat/').$p['product_id'];  ?>"><i class="fa fa-pencil-alt"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $subjudul ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('semester/product');?>" method="post">
                  <div class="form-group">
                    <label for="name">Nama Product</label>
                    <?= form_error('name'); ?>
                    <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" id="name" placeholder="Masukkan nama product">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <?= form_error('price'); ?>
                    <input type="text" name="price" value="<?= set_value('price') ?>" class="form-control" id="price" placeholder="Masukkan harga product">
                  </div>
                  <!-- <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Upload Gambar</label>
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                  </div> -->
                  <div class="form-group">
                    <label for="description">Deskripsi Product</label>
                    <?= form_error('description'); ?>
                    <textarea class="form-control" value="<?= set_value('description') ?>" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>