<?php
    require_once "../db.conn.php";
    $receivedId = isset($_GET['id']) ? $_GET['id'] : '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $image = new Image();
        $image->getImage($receivedId);
    }
    class Image{
        private $database;
        private $tablename = "image";
        private $ImageId;
        private $ImagePath;
        private $ProductId;
        
        public function __construct()
        {
            $this->database = new Database(); 
        }

        public function getImage($ProductId){
            $columname = "ProductID";
            return $this->database->getInfo($this->tablename, $columname, $ProductId);
        }

        public function getImageAll(){
            return $this->database->getInfoAll($this->tablename);
        }

        public function insertImage($ImagePath, $ProductId){
            $data = array(
            "ImagePath" => $ImagePath,
            "ProductID"=> $ProductId);
            $this->database->insert($this->tablename, $data);
        }

        public function updateImage($ImagePath, $ProductId){
            $data = array(
                "ImagePath" => $ImagePath,
                "ProductID"=> $ProductId)
                ;
                $this->database->insert($this->tablename, $data);
        }
    }
 ?>