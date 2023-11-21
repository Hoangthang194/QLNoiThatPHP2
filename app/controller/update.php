<?php
session_start();
require_once "../model/productModel.php";
$receivedId = isset($_GET['id']) ? $_GET['id'] : '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Title = $_POST["Title"];
    $Material = $_POST["Material"];
    $Des = $_POST["Des"];
    $TypeProduct = $_POST["TypeProduct"];
    $TypeRoom = $_POST["TypeRoom"];
    $Price = $_POST["Priceold"];
    $Saleoff = $_POST["SaleOff"];
    $Acreage = $_POST["Acreage"];
    $State = $_POST["state"];
    $Images = $_POST["images"];
    $product = new Product($Title,
    $Material,
    $Des,
    $TypeProduct,
    $TypeRoom,
    $Price,
    $Saleoff,
    $Acreage,
    $State,
    $Images);
    $result = $product->UpdateProduct($receivedId);
    echo '<script type="text/javascript">alert("' . $result . '");</script>';
    header("Location: ../view/index.php");
}
 ?>