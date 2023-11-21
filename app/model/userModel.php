<?php
require_once "../db.conn.php";
class UserModel {
    private $database;
    private $email;
    private $password;
    public const TABLENAME = "user";
    public function __construct($email = null, $password = null) {
        $this->database = new Database();
        $this->database->getConnection();
        $this->email = $email;
        $this->password = $password;
    }

    public function createUser() {
        try{
            $data = array('email'=> $this->email, 'password' => $this->password);
            $this->database->insert(self::TABLENAME, $data);
            return "Đăng kí tài khoản thành công";
        }
        catch(PDOException $e){
            return "Đăng kí thất bại";
        }
    }

    public function GetUser(){
        try{
            $columname = "email";
           $result = $this->database->getInfo(self::TABLENAME,$columname,$this->email);
            return $result;
        }
        catch(PDOException $e){
            return $e;
        }
    }

    public function GetAll(){
        $result = $this->database->getInfoAll("user");
        return $result;
    }

    public function getUserByID($userID){
        try{
            $columname = "UserID";
           $result = $this->database->getInfo(self::TABLENAME,$columname,$userID);
            return $result;
        }
        catch(PDOException $e){
            return $e;
        }
    }

    // Các phương thức khác cho việc tương tác với cơ sở dữ liệu
}
 ?>
