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
                    <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>

                            <li class="breadcrumb-item active" aria-current="page">Tables</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Light table</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="Table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="completion">Product id</th>
                                <th scope="col" class="sort" data-sort="name">Product Parent</th>
                                <th scope="col" class="sort" data-sort="budget">Product Name</th>
                                <!-- <th scope="col" class="sort" data-sort="status">Link</th> -->
                                <th scope="col">Available</th>

                                <th scope="col">Montly Price</th>
                                <th scope="col">Annual Price</th>
                                <th scope="col">Sku</th>

                                <th scope="col">Webspace</th>
                                <th scope="col">Band Width</th>
                                <th scope="col">Free Domain</th>
                                <th scope="col">Language</th>
                                <th scope="col">Mail Box</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <?php
                        $row1 = $obj->viewproduct($dbconn->conn);
                        if (isset($row1)) {
                            foreach ($row1 as $key => $row) {
                        ?>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row"><?php echo $row['prod_id']; ?>
                                        </th>
                                        <td class="budget">
                                            <?php $id12 = $row['prod_parent_id'];
                                            $p = $obj->viewparent($dbconn->conn, $id12);
                                            $row11 = $p->fetch_assoc();
                                            echo $row11['prod_name'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $row['prod_name'] ?>

                                        <td>

                                            <?php if ($row['prod_available'] == 1) {
                                                echo "Available";
                                            } else {

                                                echo "Unavailable";
                                            } ?>

                                        </td>
                                        <td class="text-right">

                                            <?php echo $row['mon_price'] ?>

                                        </td>

                                        <td class="text-right">

                                            <?php echo $row['annual_price'] ?>

                                        </td>

                                        <td class="text-right">

                                            <?php echo $row['sku'] ?>

                                        </td>
                                        <?php
                                        $js = $row['description'];
                                        $arr = json_decode($js, true);


                                        ?>

                                        <td class="text-right">

                                            <?php echo $arr['webspace'] ?>

                                        </td>

                                        <td class="text-right">

                                            <?php echo $arr['band'] ?>

                                        </td>


                                        <td class="text-right">

                                            <?php echo $arr['free'] ?>

                                        </td>

                                        <td class="text-right">

                                            <?php echo $arr['lang'] ?>

                                        </td>

                                        <td class="text-right">

                                            <?php echo $arr['mail'] ?>

                                        </td>

                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a href="" class="btn btn-default btn-rounded mb-2 ml-2" data-toggle="modal" data-target="#modalForm<?php echo $row['id']; ?>">Edit</a>
                                                    <?php
                                                    echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" class='btn btn-warning btn-rounded mb-2 ml-2' href='logic.php?id15=" . $row['prod_id'] . "'>Delete</a>";
                                                    ?>
                                                </div>
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
                                                            <input type="text" id="" class="form-control validate" value="<?php echo $row11['prod_name'] ?>" readonly name="updateparent">
                                                            <input type="hidden" name="hidden" value="<?php echo $row['prod_id'] ?>">
                                                        </div>

                                                        <div class="md-form mb-5">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Product Name</label>
                                                            <input type="text" id="proname" class="form-control validate" value="<?php echo $row['prod_name'] ?>" name="updatename" required>

                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <!-- <label data-error="wrong" data-success="right" for="defaultForm-pass">Link</label> -->
                                                            <input type="hidden" id="prourl" class="form-control validate" name="updatelink" value="<?php echo $row['html'] ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <?php
                                                            if ($row['prod_available'] == 1) {
                                                                $avail = "Available";
                                                            } else
                                                                $avail = "Unavailable"
                                                            ?>
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Available</label>
                                                            <select class="form-control validate" name="updateavailable">
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
                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Monthly Price</label>
                                                            <input type="text" id="proprice" class="form-control validate" name="updatemonthly" value="<?php echo $row['mon_price']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Annual Price</label>
                                                            <input type="text" id="proannualprice" class="form-control validate" name="updateannual" value="<?php echo $row['annual_price']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">SKU</label>
                                                            <input type="text" id="prosku" class="form-control validate" name="updatesku" value="<?php echo $row['sku']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Webspace</label>
                                                            <input type="text" id="proweb" class="form-control validate" name="updatewebspace" value="<?php echo $arr['webspace']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Band Width</label>
                                                            <input type="text" id="proband" class="form-control validate" name="updateband" value="<?php echo $arr['band']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Free Domain</label>
                                                            <input type="text" id="profree" class="form-control validate" name="updatefree" value="<?php echo $arr['free']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Language</label>
                                                            <input type="text" id="prolang" class="form-control validate" name="updatelang" value="<?php echo $arr['lang']; ?>">
                                                        </div>

                                                        <div class="md-form mb-4">
                                                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Mail Box</label>
                                                            <input type="text" id="promail" class="form-control validate" name="updatemail" value="<?php echo $arr['mail']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <input type="submit" class="btn btn-default" id="Update" value="Update" name="updateproduct">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                            <?php
                            }
                        }
                            ?>
                                </tbody>
                    </table>
                </div>


                <?php
                require 'footer.php';
                ?>