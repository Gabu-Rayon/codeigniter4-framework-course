  <?= $this->extend('layouts/sitelayout') ?>

  <?= $this->section('content') ?>
  <div class="container mt-4">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <h5>Student Data</h5>
              </div>

              <div class="card-body">
                  <table class="table table-bordered" id="users-list">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Course</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php  if ($students): ?>
                          <?php  foreach ($students as $row) : ?>
                          <tr>
                              <td><?= $row['id']; ?>
                              </td>
                              <td><?= $row['name']; ?>
                              </td>
                              <td>
                                  <?= $row['email']; ?>
                              </td>
                              <td><?= $row['phone']; ?>
                              </td>
                              <td><?= $row['course']; ?>
                              </td>
                              <td>
                                  <a href="" class="text-decoration-none"><i class=" bi bi-trash">Delete</i></a>
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