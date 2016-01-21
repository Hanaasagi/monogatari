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

    function display_message($message,$detail){
        echo '<div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>'.$message.'!</h4>'.$detail.'</div>';
    }
?>