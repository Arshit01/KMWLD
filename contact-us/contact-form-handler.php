<?php
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $mobile = $_POST['phone'];

    $connection = mysqli_connect("localhost", "1174054", "yagnikdevani");
    mysqli_select_db($connection,'1174054');

    $insert="INSERT INTO `Contact_us`(`Fname`, `Lname`, `Email`, `Mobile`, `Msg`) VALUES ('$fname','$lname','$email','$mobile','$msg')";

    mysqli_query($connection,$insert);
    echo "<script>alert('Message sent successfully.'); window.location.href='../index.html';</script>";
?>