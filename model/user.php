<?php

class User{
    public $id;
    public $username;
    public $password;



    public function __construct($id=null,$username=null,$password=null)
    {
        $this->id =id;
        $this->username =username;
        $this->password =password;

    }

    public static function logInUser($username,$password, mysqli $conn)
    {
        $squery = "SELECT * FROM user WHERE username=$usr->username and password =$usr->password";
        return true;


    }
}

?>