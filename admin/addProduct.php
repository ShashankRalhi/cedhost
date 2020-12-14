<?php


require 'header.php';

include("admindbcon.php");
include("productclass.php");
// echo "hii";
$dbconn = new admindbcon();

$obj = new productclass();



?>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Add Product</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>

                            <li class="breadcrumb-item active" aria-current="page">Add category</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Product</h3>
                </div>
                <div class="col-xl-12 order-xl-1">
                    <div class="card-body">
                        <form action="logic.php" method="post">
                            <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
                            <h6 style="color:red;margin-left:20px">* Required Field</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Select Product Category *</label>
                                            <!-- <input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse"> -->
                                            <select name="select" id="select" class="form-control">
                                                <option value="">Please Select</option>
                                                <?php
                                                $row1 = $obj->fetchcategory($dbconn->conn);
                                                if (isset($row1)) {
                                                    foreach ($row1 as $key => $row) {


                                                        if ($row['id'] != 1) {
                                                ?>
                                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['prod_name'] ?></option>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <p id="prodcategory" style="color:red;"></p>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Enter Product Name *</label>
                                            <input type="text" id="proname" name="name" class="form-control" placeholder="Enter Product Name" pattern="^[ A-Za-z0-9_@./#$&+-]*$" required>
                                            <p id="prodname" style="color:red;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Page URL </label>
                                            <input type="text" id="input-first-name" name="url" class="form-control" placeholder="Page URL">
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
                                            <label class="form-control-label" for="input-username">Enter Monthly Price *</label>
                                            <input type="text" id="proprice" name="price1" class="form-control" placeholder="ex: 23" required>
                                            <p id="prodprice" style="color:red;"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Enter Annual Price *</label>
                                            <input type="text" id="proannualprice" name="price2" class="form-control" placeholder="ex: 23" required>
                                            <p id="prodallprice" style="color:red;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">SKU *</label>
                                            <input type="text" id="prosku" name="sku" class="form-control" placeholder="SKU" required>
                                            <p id="prodsku" style="color:red;"></p>
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
                                            <label class="form-control-label" for="input-username">Web Space(in GB) *</label>
                                            <input type="text" id="proweb" name="webspace" class="form-control" placeholder="Web Space(in GB)" required>
                                            <h6 class="heading-small text-muted mb-4">Enter 0.5 for 512 MB</h6>
                                            <p id="prodweb" style="color:red;"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Bandwidth (in GB) *</label>
                                            <input type="text" id="proband" name="band" class="form-control" placeholder="Bandwidth (in GB)" required>
                                            <h6 class="heading-small text-muted mb-4">Enter 0.5 for 512 MB</h6>
                                            <p id="prodband" style="color:red;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Free Domain *</label>
                                            <input type="text" id="profree" name="free" class="form-control" placeholder="Free Domain" required>
                                            <h6 class="heading-small text-muted mb-4">Enter 0 if no domain available in this service
                                            </h6>
                                            <p id="prodfree" style="color:red;"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Language / Technology *
                                                Support</label>
                                            <input type="text" id="prolang" name="lang" class="form-control" placeholder="Free Domain" required>
                                            <h6 class="heading-small text-muted mb-4">Separate by (,) Ex: PHP, MySQL, MongoDB</h6>
                                            <p id="prodlang" style="color:red;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Mailbox *</label>
                                            <input type="text" id="promail" name="mail" class="form-control" placeholder="Free Domain" required>
                                            <h6 class="heading-small text-muted mb-4">Enter Number of mailbox will be provided, enter 0
                                                if none</h6>
                                            <p id="prodmail" style="color:red;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit10" id="submit10" value="Add Product" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Footer -->



                    <?php include('footer.php'); ?>