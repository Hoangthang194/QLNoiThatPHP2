
<?php 
    session_start();
    $receivedId = isset($_GET['id']) ? $_GET['id'] : '';
    $receivedIsUpdate = isset($_GET['isUpdate']) ? $_GET['isUpdate'] : '';
    require_once "../model/productModel.php";
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
        $Images = $_FILES["images"]["name"];
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
        $result = $product->InsertProduct();
        $targetDirectory = "../../access/img2/";
$_FILES["images"];
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

$uploadOk = 1;

foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
    $targetFile = $targetDirectory . basename($_FILES["images"]["name"][$key]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($uploadOk == 0) {
        echo "Xin lỗi, file của bạn không được tải lên.";
        break;
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFile)) {
            echo "File " . htmlspecialchars(basename($_FILES["images"]["name"][$key])) . " đã được tải lên.<br>";
        } else {
            echo "Có lỗi xảy ra khi tải lên file " . htmlspecialchars(basename($_FILES["images"]["name"][$key])) . ".<br>";
        }
    }
}
        echo '<script type="text/javascript">alert("' . $result . '");</script>';
        header("Location: ../view/index.php");
    }
?>