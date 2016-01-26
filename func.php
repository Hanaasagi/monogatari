<?php
    function connect(){
        global $DBADDRESS, $DBUSER, $DBPASSWD;
        $conn = new mysqli($DBADDRESS, $DBUSER, $DBPASSWD);
        if ( $conn->connect_error ){
            throw new Exception("Connect Failed");
        }
        $conn->query("set names utf8");
        $conn->select_db("monogatari");
        return $conn;
    }

    function auth_login($conn, $username, $password){
        $select = "select username , password from master";
        $result = $conn->query($select);
        $array = mysqli_fetch_row($result);
        if ($array[0] === $username && $array[1] === $password){
            return true;
        }else{
            return false;
        }
    }

    function update_password($conn, $oldPwd, $newPwd){
        //  有一项为空 则不进行修改 return true
        if(!empty($oldPwd) && !empty($newPwd)){
            $oldPwd = md5($oldPwd);
            $newPwd = md5($newPwd);
            $select = "select password from master";
            $result = $conn->query($select);
            $array = mysqli_fetch_row($result);
            if ( $array[0] === $oldPwd){
                $update = "update master set `password` = '$newPwd' where `password` = '$oldPwd';";
                $conn->query($update);
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    function update_info($conn, $nickname, $profile){
        if(!empty($nickname)){
            $update = "update master set `nickname` = '$nickname';";
            $conn->query($update);
        }else if(!empty($profile)){
            $update = "update master set `profile` = '$profile';";
            $conn->query($update);
        } 
        return true;
    }

    function display_message($message,$detail,$type){
        echo '<div class="alert alert-'.$type.'">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>'.$message.'!</h4>'.$detail.'</div>';
    }

    function is_num($number){
        return preg_match('/^\d*$/',$number);
    }

    function get_nickname($conn){
        $select = "select nickname from master;";
        $result = $conn->query($select);
        return mysqli_fetch_array($result)[0];
    }

    function get_rows($conn){
        $select = "select * from article";
        $result = $conn->query($select);
        return mysqli_num_rows($result);
    }

    function del_item($conn,$id){
        $del = "delete from article where id= $id";
        return $conn->query($del);
    }

    function insert_item($conn,$title,$content){
        $insert = "insert into article (`title`,`content`) values ('$title','$content');";
        return $conn->query($insert);
    }

    function update_item($conn,$id,$title,$content){
        $update = "update article set `title`='$title', `content`='$content' where id=$id;";
        return $conn->query($update);
    }
?>