<?php

class productclass
{
    //Fetch Category
    public function fetchcategory($conn)
    {
        $row1 = array();
        $sql = "SELECT * FROM `tbl_product`  WHERE `prod_parent_id` = 1 ";

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


    public function fetchpage($conn, $id)
    {
        $row1 = array();
        $sql = "SELECT * FROM `tbl_product`  WHERE `id` = $id ";

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





    public function fetchdata($conn, $id)
    {
        $row1 = array();
        $sql = "SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id=tbl_product_description.prod_id WHERE tbl_product.prod_parent_id='" . $id . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($row1, $row);
            }
            return $row1;
        } else {
            echo "No Product Found";
        }
    }
}

?>

<script></script>