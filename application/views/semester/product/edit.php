    <div id="content-wrapper">

      <div class="container-fluid">
  
<form action="<?= base_url('semester/Product/update_action');?>" method="post">
                  <input type="hidden" name="product_id" value="<?= $product_id; ?>">
                  <div class="form-group">
                    <label for="name">Nama Product</label>
                    <?= form_error('name'); ?>
                    <input type="text" class="form-control" name="name" value="<?= $name; ?>" id="name" placeholder="Masukkan nama product">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <?= form_error('price'); ?>
                    <input type="text" name="price" value="<?= $price; ?>" class="form-control" id="price" placeholder="Masukkan harga product">
                  </div>
                  <!-- <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Upload Gambar</label>
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                  </div> -->
                  <div class="form-group">
                    <label for="description">Deskripsi Product</label>
                    <?= form_error('description'); ?>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?= $description; ?></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
                </div>