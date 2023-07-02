<?php 
class Reg{
    public function __construct(private $username, private $password, private $secret) {
        $db = new Databases($this->username,$this->password,$this->secret);
        if ($db->checkLoginUser() == true){
            echo "User is alredy exists";
        }
        else{
            $db->createUser();
            $login = new Login($this->username,$this->password);
        }
    }
}
?>