<?php


class productclass
{
    //Fetch Category
    public function fetchcategory($conn)
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