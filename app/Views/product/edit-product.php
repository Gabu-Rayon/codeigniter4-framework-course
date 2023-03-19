  <?= $this->extend('layouts/sitelayout') ?>
  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h5>Edit Product Data
                          <a href="<?= base_url('products'); ?>" class="btn btn-info btn-sm float-right">Back</a>
                      </h5>
                  </div>
                  <div class="card-body">
                      <form action="<?= base_url('product/update-product/'.$product['id']); ?>" method="POST">
                          <input type="hidden" name="_method" value="PUT">

                          <div class="form-group mb-2">
                              <label class="form-label" for="name">name</label>
                              <input type="text" id="name" name="name" class="form-control"
                                  value="<?= $product['name'];  ?>" required>
                          </div>
                          <div class=" form-group mb-2">
                              <label class="form-label" for="price">Price</label>
                              <input type="text" id="price" name="price" class="form-control"
                                  value="<?= $product['price'];  ?>" required>
                          </div>
                          <div class="form-group mb-2">
                              <label class="form-label" for="image">Image</label>
                              <input type="file" id="image" name="image" class="form-control" required>
                              <img height="50" width="50" src="uploads/<?= $product['image']; ?>">
                          </div>
                          <div class="form-group mb-2">
                              <label class="form-label" for="description">Description</label>
                              <textarea id="description" name=" description" cols="30"
                                  value="<?= $product['description'];  ?>" required></textarea>
                          </div>
                          <div class="form-group ">
                              <button type="submit" name="save" class="btn btn-primary btn-block mb-2">Update
                                  Product Data</button>
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
      <?= $this->endSection() ?>