<?php
require_once "../model/messageModel.php";
$value = isset($_GET['id']) ? $_GET['id'] : '';
$message = new Message();
$message->changeSeen($value);
 ?>