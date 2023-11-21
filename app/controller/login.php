<?php
        session_start();
require_once "../model/userModel.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ yêu cầu POST
    $password = $_POST["password"];
    $email = $_POST["email"];
    $type = $_POST["type"];
    if($type == "login"){
        $db = new UserModel($email, $password);
        $result = $db ->GetUser();
        foreach ($result as $row) {
            if($row['Password'] == $password){
                $response = true;
                $_SESSION['user_id'] = $row['Email'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['UserID'] = $row['UserID'];
            }
            else $response = false;
            // Hiển thị các cột khác ở đây
        }
        echo $response;
    }
    if($type == "signup"){
        // Thực hiện xử lý dữ liệu ở đây, ví dụ:
        $db = new UserModel($email, $password);
        $response = $db->createUser();
    // Trả về kết quả cho Ajax
        echo $response;
    }
    if($type == "admin"){
        $db = new UserModel($email, $password);
        $result = $db ->GetUser();
        foreach ($result as $row) {
            if($row['Password'] == $password ){
                $response = true;
                $_SESSION['user_id'] = $row['Email'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['UserID'] = $row['UserID'];
            }
            else $response = false;
            // Hiển thị các cột khác ở đây
        }
        echo $response;
    }
} else {
    // Xử lý khi không có yêu cầu POST
    echo "Lỗi: Yêu cầu không hợp lệ.";
}

?>
