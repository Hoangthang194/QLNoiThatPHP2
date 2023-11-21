<?php
// Nhận dữ liệu hình ảnh từ yêu cầu POST
session_start();

$data = json_decode(file_get_contents('php://input'), true);

// Chuyển đổi dữ liệu Base64 thành dạng hình ảnh và lưu vào file
if (isset($data['imageData'])) {
    $imageData = $data['imageData'];
    // Xóa tiền tố và định dạng của dữ liệu Base64
    $imageData = str_replace('data:image/png;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);

    // Chuyển đổi dữ liệu Base64 thành dạng nhị phân
    $imageBinary = base64_decode($imageData);

    // Tạo tên file mới dựa trên thời gian
    $filename = 'captured_image_' . time() . '.png';

    // Đường dẫn đầy đủ đến thư mục lưu trữ ảnh
    $uploadPath = '../../access/img2/';

    // Kiểm tra và tạo thư mục nếu chưa tồn tại
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    // Tạo đường dẫn đầy đủ đến file mới
    $filePath = $uploadPath . $filename;

    // Thêm vào csdl
    require_once "../model/messageModel.php";
        $FromID = $_SESSION["UserID"];
        $role = $_SESSION["role"];
        if($role == "user"){
            $ToID = 3;
        }
        $MessageDetails = $filename;
        $message = new Message();
        $message->InsertMsg($FromID, $MessageDetails, $ToID);
    // Lưu dữ liệu nhị phân vào file
    file_put_contents($filePath, $imageBinary);

    echo '<script type="text/javascript">location.href = "../view/chatClient.php"</script>';

} else {
    echo 'Không có dữ liệu hình ảnh được nhận.';
}
?>