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
                  <h5>Student Data
                      <a href="<?= base_url('site/create'); ?>" class="btn btn-info btn-sm float-right m-2">Add</a>
                  </h5>
              </div>

              <div class="card-body m-5">
                  <table class="table table-bordered" id="mydatatable">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Course</th>
                              <th>Action</th>
                              <th>Del-Method</th>
                              <th>Confirm-Del</th>
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
                                  <a href="<?=base_url('site/edit/'.$row['id']); ?>"
                                      class="btn  btn-primary bt-sm">Edit</i></a>

                                  <a href="<?=base_url('site/delete/'.$row['id']); ?>"
                                      class="btn  btn-danger bt-sm">Delete</i></a>
                              </td>
                              <td>
                                  <form action="<?=base_url('site/delete-method/'.$row['id']); ?>" method="POST">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button type="submit" class="btn  btn-danger bt-sm">DELETE</button>
                                  </form>
                              </td>

                              <td>
                                  <button type="button" value="<?= $row['id'] ;?>"
                                      class="confirm_del_btn btn  btn-danger bt-sm">DELETE</button>
                              </td>
                          </tr>
                          <?php endforeach;  ?>
                          <?php endif;  ?>
                      </tbody>
                      </tr>
                      </thead>
                      <table>
              </div>
          </div>
      </div>
      <?= $this->endSection() ?>

      <?= $this->section('scripts') ?>
      <script>
      /****Using sweetAlert */
      $(document).ready(function() {
          $('.confirm_del_btn').click(function(e) {
              e.preventDefault();
              var id = $(this).val();
              swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this imaginary file!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              }).then((willDelete) => {
                  if (willDelete) {
                      $.ajax({
                          url: "site/confirm-delete/" + id,
                          success: function(response) {
                              swal({
                                  title: response.status,
                                  text: response.status_text,
                                  icon: response.status_icon,
                                  button: "OKAY !",
                              }).then((confirmed) => {
                                  window.location.reload();
                              });
                          }
                      });
                  } else {
                      swal("Your have canceled deleting this Data !");
                  }
              });
          });
      });
      /***** Using Jquery */
      //   $(document).ready(function() {
      //       $('.confirm_del_btn').click(function(e) {
      //           e.preventDefault();
      //           var id = $(this).val();
      //           if (confirm("Are you sure you want to Delete this !")) {
      //               //alert(id);
      //               $.ajax({
      //                   url: "site/confirm-delete/" + id,
      //                   success: function(response) {
      //                       window.location.reload();
      //                       alert('Student Data deleted successfully');
      //                   }
      //               });
      //           }
      //       });
      //   });
      </script>
      <?= $this->endSection() ?>