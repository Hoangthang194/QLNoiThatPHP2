<?php
require_once "../db.conn.php";
class Message{
    private $tablename = "message";
    private $database;
    private $MessageId;
    private $FromID;
    private $MessageDetails;
    private $ProductID;
    private $ToID;
    private $createDate;
    public function __construct()
    {
        $this->database = new Database();
    }

    public function InsertMsg($FromID, $MessageDetails, $ToID){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $gioHienTai = date("H:i");
        if($FromID !=3){
            $data= array(
                "FromID" => $FromID,
                "MessageDetails" => $MessageDetails,
                "ToID" => $ToID,
                "createDate" => $gioHienTai,
                "IsSeen" => "N"
            );
        }
        else{
            $data= array(
                "FromID" => $FromID,
                "MessageDetails" => $MessageDetails,
                "ToID" => $ToID,
                "createDate" => $gioHienTai,
                "IsSeen" => "Y"
            );
        }
        $this->database->insert($this->tablename, $data);
    }

    public function getMessage(){
        $result = $this->database->getInfoAll("message");
        return $result;
    }

    public function getMessageByID($id){
        $result = $this->database->getByid("message",$id, "FromID" );
        return $result;
    }

    public function getmsgWithRole($FromID, $ToID){
        $result = $this->database->getmsg($FromID, $ToID);
        return $result;
    }

    public function changeSeen($userID){
        $data = array(
            "IsSeen" => "Y"
        );
        $this->database->update("message", $data, $userID, "FromID");
    }
}
 ?>