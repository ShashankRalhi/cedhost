<?php
require 'header.php';
include("admindbcon.php");
include("productclass.php");

$dbconn = new admindbcon();

$obj = new productclass();
?>

<!-- Main content -->

<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Category</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="#" class="btn btn-sm btn-neutral">New</a>
          <a href="#" class="btn btn-sm btn-neutral">Filters</a>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-xl-8">
      <div class="card bg-default">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-header bg-transparent pb-5 text-center">
            <h2>Create Category</h2>
          </div>
          <?php //echo $msg; 
          ?>
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <!-- <small>Or sign in with credentials</small> -->
            </div>

            <form role="form" method="POST" action="logic.php">
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bullet-list-67 text-default"></i></span>
                  </div>
                  <input class="form-control" type="text" readonly value="Hosting">
                  <input type="hidden" name="pid">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bullet-list-67 text-default"></i></i></span>
                  </div>
                  <input class="form-control" name="cname" placeholder="Category Name" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bullet-list-67 text-default"></i></span>
                  </div>
                  <input class="form-control" name="link" placeholder="Link" type="text">
                </div>
              </div>
              <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div> -->
              <div class="text-center">
                <!-- <button type="button" name="submit" class="btn btn-primary my-4">Create Category</button> -->
                <input type="submit" value="Create Category" class="btn btn-primary" name="categorysubmit">
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- <div class="row">
        <div class="col">
          <div class="card ">
          <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
            </div> -->
  <div class="table-responsive">
    <table class="table align-items-center table-flush" id="Table">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort" data-sort="name">Id</th>
          <th scope="col" class="sort" data-sort="budget">Parent Product Id</th>
          <th scope="col" class="sort" data-sort="status">Product Name </th>
          <th scope="col">Link</th>
          <th scope="col">Product Available</th>
          <th scope="col" class="sort" data-sort="completion">Product Launch Date</th>
          <th scope="col">Action</th>


        </tr>
      </thead>
      <tbody class="list">
        <?php

        $row1 = $obj->fetchcategory($dbconn->conn);
        if (isset($row1)) {
          foreach ($row1 as $key => $row) {
            if ($row['id'] != 1) {
        ?>
              <tr>
                <th scope="row">
                  <?php echo $row['id']; ?>
                </th>
                <td class="budget">
                  <?php
                  if ($row['prod_parent_id'] == 1) {

                    $parent = "Hosting";
                  }
                  echo $parent; ?>
                </td>
                <td>
                  <?php echo $row['prod_name']; ?>
                </td>
                <td>
                  <?php
                  if ($row['html'] == "") {
                    $link = "Null";
                  } else {
                    $link = $row['html'];
                  }
                  echo $link;
                  ?>
                </td>
                <td>
                  <?php echo $row['prod_available']; ?>
                </td>
                <td>
                  <?php echo $row['prod_launch_date']; ?>
                </td>
                <td>
                  <div class="text-center">
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" input-type="hidden" data-target="#modalForm<?php echo $row['id']; ?>">Edit</a>
                    <a href="logic.php?id5=<?php echo $row['id'] ?>" class="btn btn-warning btn-rounded mb-4">Delete</a>
                  </div>
                </td>
              </tr>

              <div class="modal fade" id="modalForm<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Update data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="logic.php" method="POST">
                      <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm-email">Parent Name</label>
                          <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $parent ?>" readonly name="updateparent">
                          <input type="hidden" name="hidden" value="<?php echo $row['id']; ?>">
                        </div>

                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm-email">Product Name</label>
                          <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $row['prod_name'] ?>" name="cname1">

                        </div>


                        <div class="md-form mb-4">
                          <label data-error="wrong" data-success="right" for="defaultForm-pass">Link</label>
                          <input type="text" id="defaultForm-pass" class="form-control validate" name="link1" value="<?php echo $link ?>">

                        </div>

                        <div class="md-form mb-4">
                          <?php
                          if ($row['prod_available'] == 1) {
                            $avail = "Available";
                          } else
                            $avail = "Unavailable"
                          ?>
                          <label data-error="wrong" data-success="right" for="defaultForm-pass">Available</label>
                          <select class="form-control validate" name="is_available">
                            <option value="<?php echo $row['prod_available'] ?>"><?php echo $avail ?></option>
                            <?php

                            if ($avail == "Available") {
                            ?>
                              <option value="2">Unavailable</option>

                            <?php
                            } else {
                            ?>
                              <option value="1">Available</option>

                            <?php


                            }
                            ?>
                          </select>


                        </div>

                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" class="btn btn-default" id="Update" value="Update" name="categorysubmit1">
                      </div>
                    </form>
                  </div>
                </div>
              </div>


        <?php
            }
          }
        } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>