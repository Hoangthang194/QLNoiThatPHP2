<?php
require_once "../controller/getData.php";
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tư vấn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../../access/css/chatclient.css">
  
</head>
<body>
<!-- partial:index.partial.html -->
<div class="menu">
            <div class="back"><a href="../../index.php" style="text-decoration: none;color:#fff;"><i class="fa fa-chevron-left"></i></a> <i class="fa-solid fa-user-tie fa-flip"></i></div>
            <div class="name">Admin</div>
            <?php
              date_default_timezone_set('Asia/Ho_Chi_Minh');
              $gioHienTai = date("H:i");
              echo '
            <div class="last">'.$gioHienTai.'</div>
              '
             ?>
        </div>
    <ol class="chat">
      <?php
      session_start();
        $getData = new Getdata();
        $userlst = $getData->GetUserAll();
        foreach($userlst as $user){
          if($user["Email"]!= $_SESSION["user_id"]){
            continue;
          };
        $ToID = 3;
        $results = $getData->getMessageByID($user["UserID"]);
        if($results == false){
          continue;
        }
        $resultsMsg =$getData->getmsgWithRole($_SESSION["UserID"],$ToID);
          foreach($resultsMsg as $result){
            $FromID = $result["FromID"];
            $message = $result["MessageDetails"];
            $user = $getData->getUserByID($FromID);
            $role = $user[0]["role"];
            $trimmedMessage = substr($message, -3);
            if($role == "user"){
              echo '
              <li class="self">
              <div class="avatar"><i class="fa-solid fa-user icon"></i></div>
            <div class="msg">
              ';
              if($trimmedMessage == "png" || $trimmedMessage == "jpg"){
                echo'
                <img src="../../access/img2/'.$message.'" draggable="false"/>
                <time>'.$result['createDate'].'</time>
                ';
              }
              else{
                echo'
              <p>'.$message.'</p>
              <time>'.$result['createDate'].'</time>';
              }
              
              echo'
            </div>
            </li>
              ';
            }
            else{
              echo '
              <li class="other">
              <div class="avatar"><i class="fa-solid fa-user-tie icon"></i></div>
            <div class="msg">
              <p>'.$message.'</p>
              <time>'.$result['createDate'].'</time>
            </div>
          </li>
              ';
            }
          }

          break;

        }
       ?>

    </ol>
    <i class="fa-solid fa-camera" style="position:fixed; font-size: 20px; z-index: 1000; bottom: 15px; left:15px" onclick="startCamera()" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
    <i class="fa-solid fa-image icon-image" style="position:fixed; font-size: 20px; z-index: 1000; bottom: 15px; left:50px"></i>
    <form action="../controller/insertMsg.php" method="post" enctype="multipart/form-data">
    <input type="file" class="visually-hidden input-image" name="images[]" multiple>
    <input class="textarea" type="text" placeholder="Type here!" style="padding-left: 80px;" name="message"/>
    <button type="submit" style="position: fixed; right:15px; z-index:1000; bottom:10px;font-size: 20px; border: none;">
    <i class="fa-solid fa-paper-plane clickable icon send" ></i>
    </button>
    </form>

    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chụp ảnh sản phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopCamera()"></button>
      </div>
      <div class="modal-body">
      <video id="camera" width="460" height="400" autoplay></video>
      <canvas id="canvas" style="display: none;"></canvas>
      <img src="" alt="" id="imageCapture" width="" height="">
      </div>
      <div class="modal-footer" style="display: flex; justify-content: center;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="stopCamera()">Close</button>
        <button type="button" class="btn btn-primary capture" onclick="captureImage()">Chụp</button>
        <button type="button" class="btn btn-primary submitServer visually-hidden">Gửi</button>
      </div>
    </div>
  </div>
</div>
  <script>
    let stream;
    async function startCamera() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({ video: true });

            const videoElement = document.getElementById('camera');
            videoElement.srcObject = stream;

        } catch (error) {
            console.error('Không thể truy cập camera: ', error);
        }
    }

    function stopCamera() {
        if (stream) {
            const tracks = stream.getTracks();
            console.log(stream);
            tracks.forEach(track => {
                track.stop();
            });

            const videoElement = document.getElementById('camera');
            videoElement.srcObject = null;
        }
    }

    function captureImage() {
        const videoElement = document.getElementById('camera');
        const canvas = document.getElementById('canvas');
        const context = canvas.getContext('2d');

        canvas.width = videoElement.videoWidth;
        canvas.height = videoElement.videoHeight;

        context.drawImage(videoElement, 0, 0, canvas.width, canvas.height);

        const imageDataURL = canvas.toDataURL('image/png');

        const capturedImage = new Image();
        capturedImage.src = imageDataURL;
        console.log(capturedImage);
        document.getElementById("imageCapture").src = imageDataURL;
        document.getElementById("imageCapture").width = 460;
        document.getElementById("imageCapture").height = 350;

        document.querySelector(".capture").classList.add("visually-hidden");
        var btnSubmit =  document.querySelector(".submitServer");
        btnSubmit.classList.remove("visually-hidden");
        btnSubmit.onclick =async function(){
          try {
            const response = await fetch('../controller/insertImageCapture.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ imageData: imageDataURL }),
            });

            if (response.ok) {
                console.log('Dữ liệu hình ảnh đã được gửi đi thành công.');
                location.href = "../view/chatClient.php";
            } else {
                console.error('Gửi dữ liệu hình ảnh không thành công.');
            }
        } catch (error) {
            console.error('Lỗi khi gửi dữ liệu hình ảnh:', error);
        }
        }
    }

    document.querySelector(".icon-image").onclick = function(){
      document.querySelector(".input-image").click();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- partial -->
</body>
</html>
