<?php
    require_once "../db.conn.php";
    require_once "../model/imageModel.php";
    class Product{
        private $database;
        private $tablename = "product";
        private $ProductId;
        private $Title;
        private $Material;
        private $Des;
        private $TypeID;
        private $RoomID;
        private $Priceold;
        private $SaleOff;
        private $Acreage;
        private $IsState;
        private $Images;
        private $Favourite;
        private $Rating;
        public function __construct($Title = null,
        $Material = null,
        $Des = null,
        $TypeProduct = null,
        $TypeRoom = null,
        $Price = null,
        $Saleoff = null,
        $Acreage = null,
        $State = null,
        $Images = null)
        {
            $this->database = new Database();
            $this->database->getConnection();
            $this->Title = $Title;
            $this->Material = $Material;
            $this->Des = $Des;
            $this->TypeID = $TypeProduct;
            $this->RoomID = $TypeRoom;
            $this->Priceold = $Price;
            $this->SaleOff = $Saleoff;
            $this->Acreage = $Acreage;
            $this->IsState = $State;
            $this->Images = $Images;
        }

        public function InsertProduct(){
            $this->ProductId = uniqid();
            $tablename = "product";
            $data = array(
            "ProductId" => $this->ProductId,
            "Title"=> $this->Title,
            "Material"=> $this->Material,
            "Des"=> $this->Des,
            "TypeID"=> $this->TypeID,
            "RoomID"=> $this->RoomID,
            "Priceold"=> $this->Priceold,
            "SaleOff"=> $this->SaleOff,
            "Acreage"=> $this->Acreage,
            "IsState"=> $this->IsState
        );
            try{
                $this->database->insert($tablename, $data);
                foreach($this->Images as $key => $value){
                $imagemodel = new Image();
                $imagemodel->insertImage($value, $this->ProductId);
            }
            return "Thêm thành công";
            }
            catch(PDOException $e){
            echo "Lỗi $e";
            }
    }

        public function UpdateProduct( $productId){
            $tablename = "product";
            $data = array(
            "Title"=> $this->Title,
            "Material"=> $this->Material,
            "Des"=> $this->Des,
            "TypeID"=> $this->TypeID,
            "RoomID"=> $this->RoomID,
            "Priceold"=> $this->Priceold,
            "SaleOff"=> $this->SaleOff,
            "Acreage"=> $this->Acreage,
            "IsState"=> $this->IsState
        );
        $this->database->update($tablename, $data, $productId, "productId");
        $this->database->delete("image", $productId, "ProductID");
        foreach($this->Images as $key => $value){
            $imagemodel = new Image();
            $imagemodel->updateImage($value, $productId);
        }
        return "Cập nhật thành công";
        }

        public function DeleteProduct($productId){
            $this->database->delete($this->tablename,$productId,"productId");
        }

        public function getAll(){
            try{
                $result = $this->database->getInfoAll($this->tablename);
            return $result;
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getById($productId){
            try{
                $result = $this->database->getByid($this->tablename,$productId, "productId");
            return $result;
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }

    }

 ?>