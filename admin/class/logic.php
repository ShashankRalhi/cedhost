<?php
include("admindbcon.php");
include("productclass.php");

$dbconn = new admindbcon();

$obj = new productclass();

if (isset($_POST['categorysubmit'])) {
    $cat_name = $_POST['cname'];
    $cat_link = $_POST['link'];

    if ($cat_name == null || $cat_link == null) {
        echo "<script>alert('Plesae Colmpete all fields');</script>";
    } else {
        $sql = $obj->insert($dbconn->conn, $cat_name, $cat_link);
        //header("location:verification.php");
        if ($sql) {
            echo "fdgfdgdggdfgfdgerer34";
            //$sql = $obj->fetch($dbconn->conn);
            // foreach ($sql as $key => $row) {
            //     print_r($sql);
            // }
        } else {
            echo "0 Result";
        }
    }
}

?>

<script>

</script>