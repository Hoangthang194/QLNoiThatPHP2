<?php
require_once "../model/imageModel.php";
require_once "../model/messageModel.php";
require_once "../model/oderModel.php";
require_once "../model/orderDetailModel.php";
require_once "../model/productModel.php";
require_once "../model/roomModel.php";
require_once "../model/typeProductModel.php";
require_once "../model/userModel.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $getData = new Getdata();
    $results = $getData->getProduct();
    $arr = [];
    foreach($results as $result){
    $resultImgs = $getData->getImage($result["productId"]);
        $result["img"] = $resultImgs;
        array_push($arr, $result);
    }
    header('Content-Type: application/json');

    // Trả về dữ liệu dưới dạng JSON
    echo json_encode($arr);
}
class Getdata{
    public function __construct()
    {
        
    }

    public function getProduct(){
        $productAll = new Product();
         $results = $productAll->getAll();
         $array = [];
         foreach($results as $result){
            $type = self::getType($result['TypeID']);
            $typeRoom = self::getTypeRoom($result['TypeID']);
            $result["TypeName"] = $type[0]["TypeName"];
            $result["RoomName"] = $typeRoom[0]["RoomName"];
            array_push($array,$result);
         }
         
         return $array;
    }

    public function getProductByid($productId){
        $product = new Product();
        $result = $product->getById($productId);
        return $result;
    }

    public function getImage($ProductId){
        $image = new Image();
        return $image->getImage($ProductId);
    }

    public function getType($TypeID){
        $type = new TypeProduct();
        return $type->GetByID($TypeID);
    }

    public function getTypeRoom($TypeID){
        $typeRoom = new Room();
        return $typeRoom->GetByID($TypeID);
    }

    public function getMessage(){
        $message = new Message();
        return $message->getMessage();
    }

    public function getUserByID($userID){
        $user = new UserModel();
        return $user->getUserByID($userID);
    }

    public function GetUserAll(){
        $user = new UserModel();
        return $user->GetAll();
    }
    

    public function getMessageByID($id){
        $message = new Message();
        return $message->getMessageByID($id);
    }

    public function getmsgWithRole($FromID, $ToID){
        $message = new Message();
        return  $message->getmsgWithRole($FromID, $ToID);
    }
}
 ?>