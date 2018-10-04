<?php
require('connect.php');
require('sessions.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    //validate email
    $sql = "SELECT`uname` FROM `tbl-login` WHERE `uname` = '$email'";
    $result = mysqli_query($conn, $sql);
    if($result && mysqli_num_rows($result) == 0){

    $password = $_POST['password'];
    $type = 'user';
    $sql = "INSERT INTO `tbl-login`(`id`, `uname`, `password`, `type`) VALUES (NULL, '$email', '$password', '$type')";
    

    // print_r($_POST);
    if(mysqli_query($conn, $sql)){
        $lid = mysqli_insert_id($conn);

        //values
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $place = $_POST['place'];
        $sql = "INSERT INTO `tbl-details`(`regid`, `fname`, `lname`, `phoneno`, `place`) VALUES ('$lid', '$fname', '$lname', '$phone', '$place')";

        // echo $sql;
        if(mysqli_query($conn, $sql)){
            setSession('uid', $lid);
            setSession('r', TRUE);
            header('location:../user.php');
        }

    }
    else{
        setSession('l_err', TRUE);
        setSession('err_msg', 'Something went wrong!');
        header('location:../register.php');
    }
    }
    else{
        setSession('l_err', TRUE);
        setSession('err_msg', 'Email is already taken!');
        header('location:../register.php');
    }
}