<?php
    include "../model/productModel.php";
    $product = new Product();
    $receivedId = isset($_GET['id']) ? $_GET['id'] : '';
    echo '<script>confirm("Bạn có chắc chắn xóa không?");</script>';
    $product->DeleteProduct($receivedId);
    echo '<script>alert("Xóa thành công"); setTimeout(function(){ window.location.href = "../view/index.php"; }, 500);</script>';

 ?>