  <?= $this->extend('layouts/sitelayout') ?>
  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row jistify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h5>Add Student Data
                          <a href="<?= base_url('students'); ?>" class="btn btn-info btn-sm float-right">Back</a>
                      </h5>
                  </div>
                  <div class="card-body">
                      <form action="<?= base_url('site/add') ?>" method="POST">
                          <div class="form-group mb-2">
                              <label class="form-label" for="name">name</label>
                              <input type="text" id="name" name="name" class="form-control" placeholder="name" required>
                          </div>
                          <div class="form-group mb-2">
                              <label class="form-label" for="phone">Contact</label>
                              <input type="text" id="phone" name="hpone" class="form-control" placeholder="+254 ..."
                                  required>
                          </div>
                          <!-- Email input -->
                          <div class="form-group mb-2">
                              <label class="form-label" for="email">email</label>
                              <input type="email" id="email" name="email" class="form-control" placeholder="email"
                                  required>
                          </div>

                          <!-- Course input -->
                          <div class="form-group mb-2">
                              <label class="form-label" for="name">course</label>
                              <input type="text" id="course" name="course" class="form-control" placeholder="course"
                                  required>
                          </div>
                          <div class="form-group ">
                              <button type="submit" name="add" class="btn btn-primary btn-block mb-2">Submit
                                  Data</button>
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
      <?= $this->endSection() ?>