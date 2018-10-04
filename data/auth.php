<?php
//mysqli connection
require('connect.php');
require('sessions.php');
print_r($_POST);

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT `id`, `type` FROM `tbl-login` WHERE `status` = '1' AND `uname` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    print_r(mysqli_num_rows($result));
    if($result && mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
        print_r($data);
        $id = $data['id'];
        $type = $data['type'];

        
        setSession('uid', $id);
        setSession('type', $type);
        
        // echo $type;
        //REDIRECT
        switch($type){
            case 'user':
                    header('location:../user.php');
            break;
            case 'admin':
            header('location:../admin.php');
            //admin page
            break;
            case 'coordinator':
            header('location:../coordinator.php');
            //coordinator page
            break;
        }
    }else{;
        echo 'err';
    }

}

