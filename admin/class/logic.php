<?php
include("admindbcon.php");
include("productclass.php");

$dbconn = new admindbcon();

$obj = new productclass();

if (isset($_POST['categorysubmit'])) {
    $cat_name = $_POST['cname'];
    $cat_link = $_POST['link'];

    if ($cat_name == null || $cat_link == null) {
        echo "<script>alert('Plesae Complete all fields');</script>";
    } else {
        $sql = $obj->insert($dbconn->conn, $cat_name, $cat_link);
    }
}

?>

<script>

</script>