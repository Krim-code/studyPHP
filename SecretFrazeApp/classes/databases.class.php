<?php
class Databases{



    private $hostBD = "localhost";
    private $loginBD = "root";
    private $passwordBD = "";

    private $nameBD = "secret_fraze_app";

    private $nameTableOfUsers = "users";

    private $conn;

    private $userID = "undefined";
    private $userSecret = "undefined";

    public function __construct(private $loginUser, private $passwordUser, private $secretUser = "undefined"){
        try {
            // подключаемся к серверу
            $this->conn = new PDO("mysql:host=".$this->hostBD.";dbname=".$this->nameBD, $this->loginBD, "$this->passwordBD");
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function checkLoginUser(){
        $sql = "SELECT * FROM users WHERE login = :login";
        $stmt = $this->conn->prepare($sql);
        // $stmt->bindValue(":tablename",$this->nameTableOfUsers);
        $stmt->bindParam(":login",$this->loginUser);
        try{

            $stmt->execute();
            if($stmt->rowCount()>0){
                return true;
            }
            else{
                return false;
            }
        }
        catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
        }
    }

    public function checkPassword(){
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
        $stmt = $this->conn->prepare($sql);
        // $stmt->bindValue(":tablename",$this->nameTableOfUsers);
        $stmt->bindParam(":login",$this->loginUser);
        $stmt->bindParam(":password",$this->passwordUser);
        try{

            $stmt->execute();
            if($stmt->rowCount()>0){
                foreach ($stmt as $row) {
                    $this->userID = $row["id"];
                    $this->userSecret = $row["secret"];
                    return true;
                }
            }
            else{
                echo "Password is not exists";
                return false;
            }
        }
        catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
        }
    }
      public function getSecret(){
        return $this->userSecret;
    }

    public function createUser(){
        try{
            $sql = "INSERT INTO users (login, password,secret) VALUES (:login,:password,:secret)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(":login", $this->loginUser);
            $stmt->bindValue(":password", $this->passwordUser);
            $stmt->bindValue(":secret", $this->secretUser);
            $affectedRowsNumber = $stmt->execute();
            if($affectedRowsNumber > 0 ){
                return true;
            }
            else{
                return false;
            }

        }
        catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
        }
        
    }
}
?>