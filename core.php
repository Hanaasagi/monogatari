<?php
    //core.php
    include "./config";
    include "./func.php";
    if( ! isset($_POST['action']) ){
        header("location:./error.html");
        exit();
    }

    if( $_POST['action'] === "updateSetting"){
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

    if( $_POST['action'] === "del"){
        if( isset($_POST['id']) && is_num($_POST['id'])){
            try{
                $conn = connect();
                del_item($conn,$_POST['id']);
            }catch(Exception $error){
                header("location:./admin/admin.php");
                exit();
            }
        }
        header("location:./admin/admin.php");
    }

    if( $_POST['action'] === "save"){
        if( isset($_POST['title']) && isset($_POST['content']) && !empty($_POST['content']) ){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            try{
                $conn = connect();
            }catch(Exception $error){
                header("location:./error.html");
                exit();
            }
//            echo $id;
            if( !empty($id) ){
//               echo '更新';
                if(update_item($conn,$id,$title,$content)){
                    header("location:./admin/admin.php");
                    exit();
                }
            }else{
//                echo '插入';
                if(insert_item($conn,$title,$content)){
                    header("location:./admin/admin.php");
                    exit();
                }
            }
        }
        header("location:./error.html");
    }

?>