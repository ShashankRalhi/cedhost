//VERIFY Email/Mobile
if (isset($_POST['vemail'])) {

$vemail = $_SESSION['vemail'];
$vmobile = $_SESSION['vmobile'];

$vpeotp = $_POST['eotp'];
$vpmotp = $_POST['motp'];


if ($_SESSION['otp'] == $vpeotp) {
$sql = $obj->verifyemail($dbconn->conn, $vemail);
if ($sql) {
echo "<script>
    alert('Email Verified & Now you can Login');
</script>";
header("location:login.php");
}
}

if ($_SESSION['otpm'] == $vpmotp) {
$sql = $obj->verifymobile($dbconn->conn, $vmobile);
if ($sql) {
echo "<script>
    alert('Mobile Verified & Now you can Login');
</script>";
header("location:login.php");
}
}

if ($_SESSION['otp'] == $vpeotp && $_SESSION['otpm'] == $vpmotp) {
// echo "<script>
    alert('Email Success');
</script>";
$sql = $obj->verify($dbconn->conn, $vemail, $vmobile);
if ($sql) {
echo "<script>
    alert('Email & Mobile Verified');
</script>";
header("location:login.php");
}
} else {
echo "<script>
    alert('Verification Failed');
</script>";
}
}