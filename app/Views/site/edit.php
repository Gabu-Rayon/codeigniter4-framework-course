  <?= $this->extend('layouts/sitelayout') ?>
  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row jistify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h5>Edit Student Data
                          <a href="<?= base_url('students'); ?>" class="btn btn-info btn-sm float-right">Back</a>
                      </h5>
                  </div>
                  <div class="card-body">
                      <form action="<?= base_url('site/update/'.$student['id']); ?>" method="POST">
                          <input type="hidden" name="_method" value="PUT">

                          <div class="form-group mb-2">
                              <label class="form-label" for="name">name</label>
                              <input type="text" id="name" name="name" class="form-control"
                                  value="<?= $student['name'];  ?>" required>
                          </div>
                          <div class=" form-group mb-2">
                              <label class="form-label" for="phone">Contact</label>
                              <input type="text" id="phone" name="phone" class="form-control"
                                  value="<?= $student['phone'];  ?>" required>
                          </div>
                          <!-- Email input -->
                          <div class="form-group mb-2">
                              <label class="form-label" for="email">email</label>
                              <input type="email" id="email" name="email" class="form-control"
                                  value="<?= $student['email'];  ?>" required>
                          </div>

                          <!-- Course input -->
                          <div class="form-group mb-2">
                              <label class="form-label" for="name">course</label>
                              <input type="text" id="course" name="course" class="form-control"
                                  value="<?= $student['course'];  ?>" required>
                          </div>
                          <div class="form-group ">
                              <button type="submit" name="save" class="btn btn-primary btn-block mb-2">Update
                                  Data</button>
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
      <?= $this->endSection() ?>