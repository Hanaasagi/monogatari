<?php
    //core.php
    include "./config";
    include "./func.php";
    if( ! isset($_POST['action']) ){
        exit();
    }

    if( $_POST['action'] === "update"){
        if( isset($_POST['nickname']) && isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_POST['profile']) ){
            $nickname = $_POST['nickname'];
            $oldPassword = $_POST['oldPassword'];
            $newPassword = $_POST['newPassword'];
            $profile = $_POST['profile'];

            try{
                $conn = connect();
            }catch(Exception $error){
                header("location:./admin/setting.php?failed");
                exit();
            }

            if( update_password($conn, $oldPassword, $newPassword) && update_info($conn, $nickname, $profile)){
                header("location:./admin/setting.php?success");
            }else{
                header("location:./admin/setting.php?failed");
            }
        }else{
            header("location:./admin/setting.php?failed");
        }
    }
?>