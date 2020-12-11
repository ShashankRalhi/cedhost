<?php


class productclass
{
    //FORS INSERT PRODUCT IN DB
    public function insert($conn, $cat_name, $cat_link)
    {
        $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES (1,'" . $cat_name . "','" . $cat_link . "',1,NOW())";
        $result = $conn->query($sql);
        return $result;
    }

    //Fetch Category
    public function fetch($conn)
    {
        $row1 = array();
        $sql = "SELECT * FROM `tbl_product`";

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



    //Delete Product
    public function delete($conn, $id)
    {

        $sql = "DELETE FROM `tbl_product` WHERE `id` = '" . $id . "'";
        $result = $conn->query($sql);
        if ($result) {
            return $result;
        } else {
            return $result;
        }
    }
}

?>

<script></script>