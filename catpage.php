<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("header.php");
    if (isset($_SESSION['username'])) {
        $sql = $pdt->fetchpage($obj->conn, $id);
        foreach ($sql as $key => $values) {
?>
            <!---singleblog--->
            <div class="content">
            <?php
            echo $values['html'];
        }
            ?>
            <div class="tab-prices">
                <div class="container">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div class="linux-prices">
                                    <?php

                                    $sql1 = $pdt->fetchdata($obj->conn, $id);
                                    if (isset($sql1)) {
                                        foreach ($sql1 as $key => $value1) {
                                    ?>
                                            <div class="col-md-3 linux-price">
                                                <div class="linux-top">
                                                    <h4><?php echo $value1['prod_name'];
                                                        $dep = $value1['description'];
                                                        $array = json_decode($dep, true);
                                                        ?></h4>
                                                </div>
                                                <div class="linux-bottom">
                                                    <h5>$<?php echo $value1['mon_price']; ?><span class="month"> per month</span></h5>
                                                    <h5>$<?php echo $value1['annual_price']; ?><span class="month"> per annum</span></h5>
                                                    <h6><?php echo $array['free']; ?> Domain</h6>
                                                    <ul>
                                                        <li><strong><?php echo $array["webspace"]; ?></strong>GB Disk Space</li>
                                                        <li><strong><?php echo $array["band"]; ?></strong>GB Data Transfer</li>
                                                        <li><strong><?php echo $array["mail"]; ?></strong> Email Accounts</li>
                                                        <li><strong><?php echo $array["lang"]; ?> </strong> Langugae</li>
                                                        <li><strong>High Performance </strong> Servers</li>
                                                        <li><strong>Location</strong> : <img src="images/india.png"></li>
                                                    </ul>
                                                </div>
                                                <a href="#">buy now</a>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- clients -->
            <div class="clients">
                <div class="container">
                    <h3>Some of our satisfied clients include...</h3>
                    <ul>
                        <li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
                        <li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
                        <li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
                        <li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
                        <li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
                        <li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
                    </ul>
                </div>
            </div>
            <!-- clients -->
            <div class="whatdo">
                <div class="container">
                    <h3>Linux Features</h3>
                    <div class="what-grids">
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="what-grids">
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-move" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            </div>

    <?php
        include("footer.php");
    } else {
        echo "<script>alert('Please Login First');
            window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Sorry this is not allowed');
            window.location='index.php';</script>";
}
    ?>