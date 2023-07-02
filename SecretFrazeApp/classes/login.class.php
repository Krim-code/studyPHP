<?php 
class Login{
    private $user_secret = "undefined";

    public function __construct(private $login,private $password){
        $db = new Databases($this->login,$this->password);
        if ($db->checkLoginUser() == true){
            if($db->checkPassword() == true){
                $this-> user_secret = $db->getSecret();
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['secret'] = $this->user_secret;
                // header("Refresh:0");
            };
        }
        else{
            echo "Such User is'nt exists";
        }
        
    }
}
?>