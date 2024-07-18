    <div id="content-wrapper">

      <div class="container-fluid">
<div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/image/') . $product['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['name']; ?></h5>
                    <p class="card-text"><?= $product['price']; ?></p>
                    <p class="card-text"><?= $product['description']; ?></p>
                    <a class="btn btn-warning" href="<?= base_url('semester/product'); ?>">kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>