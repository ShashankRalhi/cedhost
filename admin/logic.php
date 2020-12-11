<?php
include("admindbcon.php");
include("productclass.php");

$dbconn = new admindbcon();
$obj = new productclass();


//Insert Category
if (isset($_POST['categorysubmit'])) {
    $cat_name = $_POST['cname'];
    $cat_link = $_POST['link'];

    if ($cat_name == null || $cat_link == null) {
        echo "<script>alert('Plesae Complete all fields');</script>";
    } else {
        $sql = $obj->insert($dbconn->conn, $cat_name, $cat_link);
        header("location:category.php");
    }
}



//Delete Category
$id = $_GET['id'];
//echo $id;
if ($id) {
    $sql = $obj->delete($dbconn->conn, $id);
    if ($sql) {
        echo "<script>alert('DELETE SQL Success')window.location='category.php';</script>";
        //header("location:category.php");
    } else {
        echo "<script>alert('DELETE SQL Failed');</script>";
        //header("location:category.php");
    }
}





//Add Product
if (isset($_POST['pdt_submit'])) {

    $host = $_POST['hosting'];
    $name = $_POST['pdt_name'];
    $link = $_POST['pdt_url'];
    $mnt = $_POST['pdt_mnt_value'];
    $year = $_POST['pdt_anl_value'];
    $sku = $_POST['pdt_sku'];
    $space = $_POST['web_space'];
    $band = $_POST['band'];
    $domain = $_POST['domain'];
    $lang = $_POST['lang'];
    $mail = $_POST['mail'];

    $sql = $obj->insert($dbconn->conn, $name, $link);
    // $sql = $obj->addpdt($dbconn->conn, $host, $name, $link, $mnt, $year, $sku, $space, $band, $domain, $lang, $mail);
} else {
    //echo "0 results";
}


?>

<script>

</script>