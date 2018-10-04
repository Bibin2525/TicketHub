<?php
require('connect.php');

$email = $_POST['email'];
//validate email
$sql = "SELECT`uname` FROM `tbl-login` WHERE `uname` = '$email'";
$result = mysqli_query($conn, $sql);
if($result && mysqli_num_rows($result)==0){
    echo TRUE;
}else{
    echo FALSE;
}