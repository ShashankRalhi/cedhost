<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/cedcoss/vendor/autoload.php';


include("Dbcon.php");
include("user.php");
$obj = new user();
$dbconn = new Dbcon();


//REGISTER USER
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $sques = $_POST['squestion'];
    $sans = $_POST['sanswer'];
    $pass = $_POST['pass1'];
    $pws2 = $_POST['pass2'];

    $sqlemail = $obj->checkemail($dbconn->conn, $email);
    $sqlmobile = $obj->checkmobile($dbconn->conn, $mobile);

    if ($sqlemail >= 1) {
        echo "<script>alert('Email is already in use Plaese try with another email id');
                            window.location.href = 'account.php';
            </script>";
    } else {
        if ($sqlmobile >= 1) {
            echo "<script>alert('Mobile is already in use Plaese try with another mobile number');
                                window.location.href = 'account.php';
                </script>";
        } else {
            if ($name == null && $mobile == null && $email == null && $sques == null && $sans == null && $pws1 == null && $pws2 == null) {
                echo "<script>alert('Please complete all the fields');</script>";
            } else {
                if ($pass == $pws2) {
                    $_SESSION['vname'] = $name;
                    $_SESSION['vemail'] = $email;
                    $_SESSION['vmobile'] = $mobile;
                    $pass = md5($pass);
                    $sql = $obj->insert($dbconn->conn, $name, $email, $mobile, $sques, $sans, $pass);
                    header("location:verification.php");
                } else {
                    echo "<script>alert('Password and Confirm Password both are not same');
                        window.location='account.php';</script>";
                    //header("location:account.php");
                }
            }
        }
    }
}



//Send Email
if (isset($_POST['rsemail1'])) {

    //Email Verification Code
    $otp = rand(1000, 9999);
    $_SESSION['otp'] = $otp;

    $mail = new PHPMailer();
    try {
        $mail->isSMTP(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ralhicedcosss@gmail.com';
        $mail->Password = '!@#$Ralhi123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setfrom('ralhicedcosss@gmail.com', 'CedHosting');
        $mail->addAddress($_SESSION['vemail']);
        $mail->addAddress($_SESSION['vemail'], $_SESSION['vname']);

        $mail->isHTML(true);
        $mail->Subject = 'Account Verification';
        $mail->Body = 'Hi User,Here is your otp for account verification' . " " . $otp;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        //header('location: verification.php');
        echo "<script>alert('Email OTP Send Successfully');
        window.location='verification.php';</script>";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}




//Send Mobile
if (isset($_POST['rsemail2'])) {

    $otpm = rand(1000, 9999);
    $_SESSION['otpm'] = $otpm;

    //Mobile Verification Code
    $fields = array(
        "sender_id" => "FSTSMS",
        "message" => "This is Test message-$name-" . $otpm,
        "language" => "english",
        "route" => "p",
        "numbers" => $_SESSION['vmobile'],
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => array(
            "authorization:Z4aInmrCMBepAG2Lo0URQ9uSVqlsNz7KEHcjYd1gP8XiDyJb6FLp42XAc3gxT1yKJFuVBmlwGQ0oCtHE",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
    //header("location:verification.php");
    echo "<script>alert('Mobile OTP Send Successfully');
			window.location='verification.php';</script>";
}


//For Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['pass1']);

    $sql = $obj->fetch($dbconn->conn, $email, $pass);

    foreach ($sql as $key => $row) {
        if ($row['email_approved'] == 0 && $row['phone_approved'] == 0) {
            header("location:verification.php");
        } else {
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['admin'] = $row['is_admin'];
            //print_r($_SESSION);
            //echo "<script>alert('Successfull');</script>";
            if ($_SESSION['admin'] == 1) {
                header("location:admin/index.php");
            } else {
                header("location:index.php");
            }
        }
    }
}


//VERIFY Email
if (isset($_POST['verifye'])) {
    $vemail = $_SESSION['vemail'];

    $vpeotp = $_POST['eotp'];

    if ($_SESSION['otp'] == $vpeotp) {
        $sql = $obj->verifyemail($dbconn->conn, $vemail);
        if ($sql) {
            echo "<script>alert('Email Verified & Now you can Login');
                    window.location='login.php';</script>";
            // header("location:login.php");
        }
    } else {
        echo "<script>alert('Verification Failed');</script>";
    }
}



//VERIFY Mobile
if (isset($_POST['verifym'])) {
    $vmobile = $_SESSION['vmobile'];
    $vpmotp = $_POST['motp'];

    if ($_SESSION['otpm'] == $vpmotp) {
        $sql = $obj->verifymobile($dbconn->conn, $vmobile);
        if ($sql) {
            echo "<script>alert('Mobile Verified & Now you can Login');
                window.location='login.php';</script>";
            // header("location:login.php");
        }
    } else {
        echo "<script>alert('Verification Failed');</script>";
    }
}
?>

<script>

</script>