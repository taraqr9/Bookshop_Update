<?php
    if(!empty($_SESSION['login_success'])){
    }else{
        header("location:../login.php?Error=1");
    }

?>