  <?= $this->extend('layouts/sitelayout') ?>

  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row">
          <div class="col-md-12">
              <?php
              if (session()->getFlashdata('status')) {
                  ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Hey </strong>
                  <?= session()->getFlashdata('status'); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <?php
              }
              ?>
              <div class="card">
                  <h5>Product Data
                      <a href="<?= base_url('add-product'); ?>" class="btn btn-info btn-sm float-right m-2">Add</a>
                  </h5>
              </div>

              <div class="card-body m-5">
                  <table class="table table-bordered" id="mydatatable">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Price</th>
                              <th>Image</th>
                              <th>Action</th>
                              <th>Del-Method</th>
                              <th>Confirm-Del</th>
                          </tr>
                      </thead>

                      <tbody>
                          <?php  if ($products): ?>
                          <?php  foreach ($products as $row) : ?>
                          <tr>
                              <td><?= $row['id']; ?>
                              </td>
                              <td><?= $row['name']; ?>
                              </td>
                              <td>
                                  <?= $row['description']; ?>
                              </td>
                              <td><?= $row['price']; ?>
                              </td>
                              <td><img src="uploads/<?= $row['image']; ?>" alt="image" width="80" height="80"> </td>
                              <td>
                                  <a href="<?=base_url('product/edit/'.$row['id']); ?>"
                                      class="btn  btn-primary bt-sm">Edit</i></a>
                                  <span>
                                      <a href="<?=base_url('product/delete/'.$row['id']); ?>"
                                          class="btn  btn-danger bt-sm">Delete</i>
                                      </a>
                                  </span>
                              </td>
                              <td>
                                  <form action="<?=base_url('product/delete-meth/'.$row['id']); ?>" method="POST">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button type="submit" class="btn  btn-danger bt-sm">DELETE</button>
                                  </form>
                              </td>

                              <td>
                                  <button type="button" value="<?= $row['id'] ;?>"
                                      class="confirm_delete_btn btn  btn-danger bt-sm">DELETE</button>
                              </td>
                          </tr>
                          <?php endforeach;  ?>
                          <?php endif;  ?>
                      </tbody>
                      <table>
              </div>
          </div>
      </div>
      <?= $this->endSection() ?>