<?php

class pdtclass
{
    function viewproduct($conn)
    {
        $row1 = array();
        $sql = "SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id=tbl_product_description.prod_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                array_push($row1, $row);
            }
            return $row1;
        } else {
            echo "0 results";
        }
    }

    function viewparent($conn, $id12)
    {
        $row11 = array();
        $sql = "SELECT * FROM tbl_product WHERE id='" . $id12 . "'";
        $result = $conn->query($sql);
        return $result;
    }

    function updateproduct($updatename, $updateavailable, $link, $hidden, $conn)
    {

        $sql = "UPDATE tbl_product SET prod_name='" . $updatename . "',link='" . $link . "',prod_available='" . $updateavailable . "' WHERE id='" . $hidden . "'";

        if ($conn->query($sql) === TRUE) {

            $last_id = $conn->insert_id;

            return $last_id;
        }
    }

    function updatefinalproduct($hidden, $updatemonthly, $updateannual, $conn, $updatesku, $json_arr)
    {

        $sql = "UPDATE tbl_product_description SET `description`='" . $json_arr . "' , mon_price='" . $updatemonthly . "',annual_price='" . $updateannual . "',sku='" . $updatesku . "' WHERE prod_id='" . $hidden . "'";

        if ($conn->query($sql) === TRUE) {

            echo "<script>
        alert('Product updated successfully')
        window.location='viewproduct.php'</script>";
        }
    }

    function deleteproduct($id, $conn)
    {
        $sql = "DELETE tbl_product,tbl_product_description FROM tbl_product JOIN tbl_product_description 
        ON tbl_product.id=tbl_product_description.prod_id WHERE tbl_product.id='" . $id . "'";

        if ($conn->query($sql) === TRUE) {

            echo "<script>
        alert('Product Deleted successfully')
        window.location='viewproduct.php'</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

?>

<script></script>