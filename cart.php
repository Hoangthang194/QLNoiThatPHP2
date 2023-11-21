<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="./access/css/base.css">
    <link rel="stylesheet" href="./access/css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./access/css/cart.css">
    <link rel="stylesheet" href="./access/css/responsive.css">
</head>
<body>
    <div class="cart-contain active">
        <div class="grid wide">
            <div class="cart">
            <div class="cart-item">
                <ul class="cart-list">
                    
                </ul>
            <div class="buy-btn"> Xác nhận</div>
                <a href="index.php" class="back-home">
                    <i class="fa-solid fa-rectangle-xmark"></i>
                </a>
            </div>
            </div> 
        </div>
        
    </div>

    
    <!-- Phiếu xác nhận  -->

    <div class="cart-contain buy">
        <div class="grid wide">
            <div class="cart">
            <div class="cart-item-confirm">
                
                <div class="cart-list-confirm">
                    <div class="confimation-form">
                        <div class="title-confirm">PHIẾU XÁC NHẬN</div>
                        <form action="" class="form-confirmation">
                            <div class="form-main-confirm form-name">
                                <label for="input-confimation-name" class="form-confirmation-label name" >Họ tên:</label>
                                <input type="text" class="form-confimation-input" id="input-confimation-name" required placeholder="Nhập họ tên">
                            </div>
                            <div class="form-main-confirm form-name">
                                <label for="input-confimation-name" class="form-confirmation-label name">Số điện thoại:</label>
                                <input type="text" class="form-confimation-input" id="input-confimation-phone" required placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-main-confirm form-date">
                                <label for="input-confimation-date" class="form-confirmation-label date">Địa chỉ:</label>
                                <div class="form-confimation-input-contain">
                                    <input type="text" id="address" name="address" placeholder="Nhập địa chỉ của bạn" required class="form-confimation-input">   
                            </div>
                            </div>
                            <input type="submit" style="display: none;" class="submit-form">
                        </form>
                    </div>
                    <ul class="cart-list-buy active">
                        
                    </ul>
                    <div class="sum-price"></div>
                <button class="btn-buy-cart">Xác nhận</button>
                <a href="index.php" class="back-home back-2">
                    <i class="fa-solid fa-rectangle-xmark"></i>
                </a>
                </div>
            </div>    
            </div> 
        </div>
    </div>

</body>
<?php
include "access/js/main.php";
include "access/js/cartlist.php"

 ?>

</html>