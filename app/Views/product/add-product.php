  <?= $this->extend('layouts/sitelayout') ?>
  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row jistify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h5>Add New Product Data
                          <a href="<?= base_url('products'); ?>" class="btn btn-danger btn-sm float-right m-2">Back</a>
                      </h5>
                  </div>
                  <div class="card-body m-5">
                      <form action="<?= base_url('product-store') ?>" method="POST" entype="multipart/form-data">
                          <div class="form-group mb-2">
                              <label class="form-label" for="name">Product name</label>
                              <input type="text" id="pname" name="name" class="form-control" placeholder="product name"
                                  required>
                          </div>
                          <div class="form-group mb-2">
                              <label class="form-label" for="product-description">Decsription</label>
                              <textarea type="text" id="descr" name="description" class="form-control"
                                  placeholder="Product Description ... " row="3"></textarea>
                          </div>
                          <div class="form-group mb-2">
                              <label class="form-label" for="product-price">Price</label>
                              <input type="text" id="price" name="price" class="form-control"
                                  placeholder="Product Price" required>
                          </div>
                          <div class="form-group mb-2">
                              <label class="form-label" for="image">Image</label>
                              <input type="file" name="image" class="form-control" required>
                          </div>
                          <div class="form-group ">
                              <button type="submit" name="save" class="mt-2 btn btn-primary px-4 float-end">Submit
                                  Data</button>
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
      <?= $this->endSection() ?>