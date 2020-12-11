<?php
include("admindbcon.php");
include("productclass.php");

$id = $_GET['id'];

$dbconn = new admindbcon();

$obj = new productclass();

if (isset($_POST['categorysubmit'])) {
    $cat_name = $_POST['cname'];
    $cat_link = $_POST['link'];

    if ($cat_name == null || $cat_link == null) {
        echo "<script>alert('Plesae Complete all fields');</script>";
    } else {
        $sql = $obj->insert($dbconn->conn, $cat_name, $cat_link);
        header("location:/category.php");
    }
}


if (id) {

    $sql = $obj->delete($dbconn->conn, $id);
    if ($sql) {
        header("location:admin/category.php");
    } else {
        header("location:admin/category.php");
    }
}

?>

<script>

</script>