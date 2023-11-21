<?php
require_once "../db.conn.php";
class TypeProduct{
    private $TypeID;
    private $tablename = "typeproduct";
    private $TypeName;
    private $database;
    public function __construct()
    {
        $this->database = new Database();
    }

    public function GetAll(){

    }

    public function GetByID($TypeID){
        $columname = "TypeId";
        $result =$this->database->getInfo($this->tablename,$columname,$TypeID);
        return $result;
    }
}
 ?>