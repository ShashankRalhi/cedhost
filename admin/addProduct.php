<?php
require 'header.php';
?>
<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Add Product</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
<div class="col-xl-12 order-xl-1">
  <!-- <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div> -->
  <div class="card-body">
    <form>
      <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Select Product Category</label>
              <!-- <input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse"> -->
              <select name="" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="">Linux hosting</option>
                <option value="">Windows hosting</option>
                <option value="">CMSHosting</option>
                <option value="">WordPress hosting</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-email">Enter Product Name</label>
              <input type="text" id="input-email" class="form-control" placeholder="Enter Product Name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-first-name">Page URL</label>
              <input type="text" id="input-first-name" class="form-control" placeholder="Page URL">
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4" />
      <!-- Address -->
      <h6 class="heading-small text-muted mb-4">Product Description (Enter Product Description Below)</h6>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Enter Monthly Price</label>
              <input type="text" id="input-username" class="form-control" placeholder="ex: 23">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-email">Enter Annual Price</label>
              <input type="text" id="input-email" class="form-control" placeholder="ex: 23">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-first-name">SKU</label>
              <input type="text" id="input-first-name" class="form-control" placeholder="SKU">
            </div>
          </div>
        </div>
      </div>
      <hr class="my-4" />
      <!-- Address -->
      <h6 class="heading-small text-muted mb-4">Features</h6>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Web Space(in GB)</label>
              <input type="text" id="input-username" class="form-control" placeholder="Web Space(in GB)">
              <h6 class="heading-small text-muted mb-4">Enter 0.5 for 512 MB</h6>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-email">Bandwidth (in GB)</label>
              <input type="text" id="input-email" class="form-control" placeholder="Bandwidth (in GB)">
              <h6 class="heading-small text-muted mb-4">Enter 0.5 for 512 MB</h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-first-name">Free Domain</label>
              <input type="text" id="input-first-name" class="form-control" placeholder="Free Domain">
              <h6 class="heading-small text-muted mb-4">Enter 0 if no domain available in this service</h6>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-first-name">Language / Technology Support</label>
              <input type="text" id="input-first-name" class="form-control" placeholder="Free Domain">
              <h6 class="heading-small text-muted mb-4">Separate by (,) Ex: PHP, MySQL, MongoDB</h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-first-name">Mailbox</label>
              <input type="text" id="input-first-name" class="form-control" placeholder="Free Domain">
              <h6 class="heading-small text-muted mb-4">Enter Number of mailbox will be provided, enter 0 if none</h6>
            </div>
          </div>
        </div>
        <div class="text-center">
          <input type="submit" value="Create Now" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
  <?php
  require 'footer.php';
  ?>
</div>
</div>