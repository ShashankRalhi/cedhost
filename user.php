<?php


class user
{
  //For Registration
  public function insert($conn, $name, $email, $mobile, $security_question, $security_answer, $password1)
  {
    $sql = "INSERT INTO tbl_user 
        (`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,
        `is_admin`,`password`,`security_question`,`security_answer`) VALUES('" . $email . "','" . $name . "',
        '" . $mobile . "',0,0,0,0,'" . $password1 . "','" . $security_question . "','" . $security_answer . "')";

    if ($conn->multi_query($sql) === TRUE) {
      echo "New records created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }



  //Fetch Category
  function fetchcategory($conn)
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


  //For Login
  public function fetch($conn, $email, $password1)
  {
    $row1 = array();
    $sql = "SELECT * FROM `tbl_user` WHERE `email` = '" . $email . "' AND `password` = '" . $password1 . "' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while ($row = $result->fetch_assoc()) {
        array_push($row1, $row);
      }
      return $row1;
    } else {
      echo "<script>alert('Invalid User Email/Password');
      window.location='login.php';</script>";
    }
  }



  //Verify Email Data
  public function verifyemail($conn, $vemail)
  {
    $sql = "UPDATE `tbl_user` SET `email_approved` = 1 , `active` = 1 WHERE `email` = '" . $vemail . "' ";

    $result = $conn->query($sql);

    return $result;
  }


  //Verify Mobile Data
  public function verifymobile($conn, $vmobile)
  {
    $sql = "UPDATE `tbl_user` SET `phone_approved` = 1 , `active` = 1 WHERE `mobile` = '" . $vmobile . "' ";

    $result = $conn->query($sql);

    return $result;
  }



  //To avoid Email Duplication in DB
  public function checkemail($conn, $email)
  {
    $sql = "SELECT * FROM `tbl_user` WHERE `email` = '" . $email . "' ";
    $result = $conn->query($sql);
    $ecount = $result->num_rows;
    return $ecount;
  }




  //To avoid Mobile Duplication in DB
  public function checkmobile($conn, $mobile)
  {
    $sql = "SELECT * FROM `tbl_user` WHERE `mobile` = '" . $mobile . "' ";
    $result = $conn->query($sql);
    $mcount = $result->num_rows;
    return $mcount;
  }
}



?>

<script>

</script>