<?php
require 'header.php';

include("class/admindbcon.php");
include("class/productclass.php");

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

            <form role="form" method="post" action="class/logic.php">
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bullet-list-67 text-default"></i></span>
                  </div>
                  <input class="form-control" type="text" readonly value="HOSTING">
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
  <div class="row">
    <div class="col">
      <div class="card ">
        <div class="card-header border-0">
          <h3 class="mb-0">Product Table</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush" id="Table">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Id</th>
                <th scope="col" class="sort" data-sort="budget">Parent Product </th>
                <th scope="col" class="sort" data-sort="status">Product Name </th>
                <th scope="col">Link</th>
                <th scope="col">Product Available</th>
                <th scope="col" class="sort" data-sort="completion">Product Launch Date</th>
                <th scope="col" class="sort" data-sort="completion">Action</th>

              </tr>
            </thead>
            <tbody class="list">
              <?php
              $row1 = $obj->fetch($dbconn->conn);
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
                        if ($row['link'] == "") {
                          $link = "Null";
                        } else {
                          $link = $row['link'];
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
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button>
                        <a class="btn btn-danger text-white" href="class/logic.php?id=<?php echo $row['id']; ?>">Delete</button>
                      </td>
                    </tr>
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




  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <form role="form" method="post" action="class/logic.php" style="width: 100%;">
            <div class="form-group mb-3">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-bullet-list-67 text-default"></i></span>
                </div>
                <input class="form-control" type="text" readonly value="HOSTING">
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
              <input type="submit" value="Update" class="btn btn-primary" name="categorysubmit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  require 'footer.php';
  ?>
</div>