<?php include("header.php");

$id = $_GET['id'];

$data = $pdt->fetchpdt($obj->conn, $id);

if (isset($data)) {
    foreach ($data as $key => $row) {
        $pg = ($row['html']);
    }
    include $pg;
}
include("footer.php"); ?>

<script>

</script>