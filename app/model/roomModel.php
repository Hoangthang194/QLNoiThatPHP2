<?php
require_once "../db.conn.php";
class Room{
    private $database;
    private $tablename = "room";
    public function __construct()
    {
        $this->database = new Database();
    }

    public function GetAll(){

    }

    public function GetByID($TypeID){
        $columname = "RoomID";
        $result =$this->database->getInfo($this->tablename,$columname,$TypeID);
        return $result;
    }
}
 ?>