<?php
class login{
    function __construct($email,$password)
    {
        $source = new source();
        $source->Query("SELECT * from `user` where `email` = ?",[$email]);
        $details = $source->SingleRow();
        $db_password = $details->password;
        return password_verify($password,$db_password);
        
    }
    public function id($email){
        $source = new source();
        $source->Query("SELECT * from user where `email` = ?",[$email]);
        $details = $source->SingleRow();
        $id = $details->id;
        return $id;
    }
    public function name($email){
        $source = new source();
        $source->Query("SELECT * from user where `email` = ?",[$email]);
        $details = $source->SingleRow();
        $name = $details->name;
        return $name;
    }
}
?>