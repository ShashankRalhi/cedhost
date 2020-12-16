<?php include("header.php");
if (isset($_SESSION['username'])) {
    // echo $_SESSION['username'];
?>

<?php
    include("footer.php");
} else {
    echo "<script>alert('Please Login First');
        window.location='login.php';</script>";
}
?>