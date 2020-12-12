<?php


class productclass
{
    //FORS INSERT PRODUCT IN DB
    public function insert($conn, $cat_name, $cat_link)
    {
        $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES (1,'" . $cat_name . "','" . $cat_link . "',1,NOW())";
        $result = $conn->query($sql);
        echo "<script>
            alert('Category Updated successfully')
            window.location='../category.php'</script>";
        // return $result;
        // // if ($conn->multi_query($sql) === TRUE) {
        //     echo "New records created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
    }

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


    // public function update($conn, $id, $cat_name1 ,$cat_link1 ,$is_available)
    // {
    //     //echo $cat_name1."<br>",$cat_link1."<br>",$id,$is_available;
    //     $sql = "UPDATE `tbl_product` SET  `prod_name` = '".$cat_name1."' ,  `link` = '".$cat_link1."' , `prod_available` = '".$is_available."'  WHERE `id`= '".$id."' ";
    //     if ($conn->query($sql) === TRUE) {
    //         echo "<script>

    //     </script>";
    //       } else {
    //         echo "Error updating record: " . $conn->error;
    //       } 
    // }



    //     public function delete($conn, $id)
    // {

    // $sql = "DELETE FROM `tbl_product` WHERE `id` = '" . $id . "'";
    // $result = $conn->query($sql);
    // if ($result) {
    // return $result;
    // } else {
    // return $result;
    // }
    // }



    function updatecategory($name, $select, $link, $hidden, $conn)
    {
        $sql = "UPDATE `tbl_product` SET `prod_name`='$name',`link`='$link',`prod_available`='$select' WHERE `id`='$hidden'";
        // echo $sql;
        // exit();
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Category Updated successfully')
            window.location='../category.php'</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    function deletecategory($id, $conn)
    {
        $sql = "DELETE FROM tbl_product WHERE id='" . $id . "'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Category Deleted successfully')
            window.location='../category.php'</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }




    function addproduct($name, $select, $link, $conn)
    {
        $sql = "INSERT INTO tbl_product (prod_parent_id, prod_name, link, prod_available, prod_launch_date)
        VALUES ('" . $select . "', '" . $name . "', '" . $link . "', 1, NOW())";

        if ($conn->query($sql) === true) {
            $last_id = $conn->insert_id;
            return $last_id;
        }
    }




    function addfinalproduct($row, $price1, $price2, $conn, $sku, $json_arr)
    {
        $sql = "INSERT INTO tbl_product_description (prod_id, `description`, mon_price, annual_price, sku)
    VALUES ('" . $row . "', '" . $json_arr . "', '" . $price1 . "', '" . $price2 . "', '" . $sku . "')";

        if ($conn->query($sql) === true) {
            echo "<script>
                alert('Product inserted successfully')
                window.location='addProduct.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>

<script></script>