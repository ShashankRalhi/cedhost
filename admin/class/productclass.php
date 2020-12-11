<?php


class productclass
{
    //For Registration
    public function insert($conn, $cat_name, $cat_link)
    {
        $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES (1,'" . $cat_name . "','" . $cat_link . "',1,NOW())";

        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
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
}

?>

<script></script>