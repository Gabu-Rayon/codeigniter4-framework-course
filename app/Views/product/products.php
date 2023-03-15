  <?= $this->extend('layouts/sitelayout') ?>

  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row">
          <div class="col-md-12">
              <?php 
              if (session()->getFlashdata('status')) {                
                ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Hey </strong> <?= session()->getFlashdata('status'); ?>
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

                      </tbody>
                      <table>
              </div>
          </div>
      </div>
      <?= $this->endSection() ?>