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


    //Fetch Category
    public function fetchpdt($conn, $id)
    {
        $row1 = array();
        $sql = "SELECT * FROM `tbl_product`  WHERE `id` = $id";

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
}

?>

<script></script>