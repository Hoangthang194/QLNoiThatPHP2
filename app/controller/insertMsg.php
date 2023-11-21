
<?php
session_start();
    require_once "../model/messageModel.php";
    $receivedId = isset($_GET['id']) ? $_GET['id'] : '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $FromID = $_SESSION["UserID"];
        $role = $_SESSION["role"];
        if($role == "user"){
            $ToID = 3;
        }
        else{
            $ToID = $receivedId;
        }
        $MessageDetails = $_POST["message"];
        $message = new Message();
        $message->InsertMsg($FromID, $MessageDetails, $ToID);
        if (!isset($_FILES["images"])) {
            echo '<script type="text/javascript">location.href = "../view/chat.php"</script>';
            return;
        }
        if($_FILES["images"]["name"][0] == ""){
            echo '<script type="text/javascript">location.href = "../view/chatClient.php"</script>';
            return;
        }
        if ($_FILES["images"]["error"] > 0) {
            echo "Có lỗi khi tải tệp tin lên: " . $_FILES["images"]["error"];
        }
        $targetDirectory = "../../access/img2/";
        foreach($_FILES["images"]["name"] as $key => $value){
            $MessageDetails = $value;
            $message->InsertMsg($FromID, $MessageDetails, $ToID);
        }
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
    }

    // if($ToID ==3){
    //     echo '<script type="text/javascript">location.href = "../view/chatClient.php"</script>';
    //     }
    //     else {
    //     echo '<script type="text/javascript">location.href = "../view/chat.php"</script>';
    //     }
 ?>
