
<?php
session_start(); 
if (isset($_SESSION['user_id']) && $_SESSION['role'] == "user") {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NS Luxury</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./access/css/logincss/login.css">
    <link rel="stylesheet" href="./access/css/base.css">
    <link rel="stylesheet" href="./access/css/main.css">
    <link rel="stylesheet" href="./access/css/grid.css">
    <link rel="stylesheet" href="./access/css/description.css">
    <link rel="stylesheet" href="./access/css/responsive.css">
    <link rel="stylesheet" href="./access/css/calendar.css">
</head>

<body>
    <div class="app">
        <header class="header" >
            <div class="grid wide">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            <a href="./app/view/index.php" class="header-link" target="_blank">Kênh admin</a>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="https://www.facebook.com/profile.php?id=100083393889990" class="header__navbar-icon-link" target="_blank">
                                <i class="header__navbar-icon fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="header__navbar-icon-link" target="_blank">
                                <i class="header__navbar-icon fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
    
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                    

                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="#" class="header__notify-footer-btn"></a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="./app/view/chatClient.php" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-circle-question"></i>
                                Hỗ trợ
                            </a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li> -->
                        <li class="header__navbar-item header__navbar-user">
                            <i class="fa-solid fa-user header__navbar-user-img"></i>
                            <?php
                                echo'<span class="header__navbar-user-name">'.$_SESSION['user_id'].'</span>';
                             ?>

                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="./Partials/cart.html">Đơn hàng đã đặt</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate">
                                    <a href="./login.php">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- header with search -->
                
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="/" class="header__logo-link">
                            <img src="./access/img2/logo-nha-xinh-moi-200422.png" alt="">
                        </a>
                    </div>
                    <div class="header__search">
                        <form action="#" id="form-search">
                            <div class="auth-form__group">
                                <select class="auth-form__input" id="checkin">
                                    <option value="2023-10-20" selected>Phòng ăn</option>
                                    <option value="2023-10-21">Phòng khách</option>
                                    <option value="2023-10-22">Phòng ngủ</option>
                                    <option value="2023-10-22">Phòng làm việc</option>

                                    <!-- Thêm các option khác tương ứng với ngày nhận hàng -->
                                </select>
                                <span class="form-message"></span>
                            </div>
                            
                            <div class="auth-form__group">
                                <select class="auth-form__input" id="checkout">
                                    <option value="2023-10-20" selected>Sofa và Armchair</option>
                                    <option value="2023-10-21">Bàn ghế</option>
                                    <option value="2023-10-22">Giường ngủ</option>
                                    <!-- Thêm các option khác tương ứng với ngày trả hàng -->
                                </select>
                                <span class="form-message"></span>
                            </div>
                            
                        </form>
                        <div class="search-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
    
                    <!-- cart layout -->
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                            <span class="header__cart-notice"></span>
                            <!-- No cart :header__cart--no-cart -->
                            <div class="header__cart-list">
                                <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/access/9bdd8040b334d31946f49e36beaf32db.png" alt="" class="header__cart-no-cart-img">
                                <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>
    
                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                <ul class="header__cart-list-item">
                                    <!--Cart-item  -->
                                    
                                </ul>
    
                                <a href="./cart.php" class="header__cart-view-cart btn btn--primary" >Xem giỏ hàng</a>
                            </div>
                        </div>
    
                        
                    </div>
                </div>
            </div>

            

            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Liên quan</a>
                </li>
                <li class="header__sort-item header__sort-item--active">
                    <a href="" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Giá</a>
                </li>
            </ul>
        </header>

        <div class="app__container" >
            <div class="grid wide">
                <div class="row sm-gutter app__content">
                    <div class="col l-2 m-0 c-0">
                        <nav class="category">
                            <h3 class="category-heading">
                                <i class="category-heading-icon fa-solid fa-list"></i>
                                Danh mục
                            </h3>
            
                            <ul class="category-list">
                                <li class="category-item category-item--active all">
                                    <a href="#" class="category-item__link">
                                        Tất cả
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">
                                        Sofa và Armchair
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">
                                        Bàn ghế
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">
                                        Giường ngủ
                                    </a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>

                    <div class="col l-10 m-12 c-12">
                        <div class="home-filter hide-on-mobile-tablet">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn btn--primary">Phổ biến</button>
                            <button class="home-filter__btn btn">Mới nhất</button>
                            <button class="home-filter__btn btn">Sản phẩm bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fa-solid fa-chevron-down"></i>
                                <ul class="select-input-list">
                                    <li class="select-input__item lowprice">
                                        <a href="#" class="select-input__link">
                                            Giá: Cao đến thấp
                                        </a>
                                    </li>
                                    <li class="select-input__item highprice">
                                        <a href="#" class="select-input__link">
                                            Giá: Thấp đến cao
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                </span>

                                <div class="home-filter__page-control">
                                    <a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
                                        <i class="home-filter__page-icon fa-solid fa-chevron-left"></i>
                                    </a>
                                    <a href="#" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="row sm-gutter product">  
                            </div>
                                
                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item back">
                                <a href="#" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-chevron-left"></i>
                                </a>
                            </li>
                            <span class="list-number">
                                
                            </span>
                            

                            <li class="pagination-item next">
                                <a href="#" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Description -->
        <div class="container-modal">
            <div class="description grid wide">
                <div class="description-main row">
                    <section class="slider col c-8"> 

                        <div class="slider-main">
                            
                        </div>


                        <div class="slider-sub row">
                            
                        </div>



                    </section>

                    <section class=" col c-4">
                        <div class="description-information">
                            <h1 class="code-room">C2119</h1>
                            <div class="information-room-detail">

                                <div class="infor-item">
                                    <div class="title-infor">
                                        Phục vụ
                                    </div>
    
                                    <div class="sub-title">
                                        Người lớn: 2<br>
                                        Trẻ em: 1<br>
                                        Tối đa: 3 ng<br>
                                    </div>
    
                                </div>
    
                                <div class="infor-item">
                                    <div class="title-infor">
                                        Bố trí căn hộ
                                    </div>
    
                                    <div class="sub-title">
                                        Diện tích: 47m2<br>
                                        Hướng view: trực diện biển<br>
                                        Số giường:<br>
                                        + 1 Super King size 2mx2m<br>
                                        + Hoặc tách thành 02 giường đơn<br>
                                    </div>
    
                                </div>

                            </div>
                        </div>

                        <div class="add-to-cart">
                            <button class="add-cart btn-des">Thêm vào giỏ</button>
                            <button class="buy-btn btn-des">Mua ngay</button>
                        </div>
                        <a href="./app/view/chatClient.php" class="message-btn" style="display: block; width: 100%; text-align: center; text-decoration: none; font-size: 20px;padding: 15px; background-color: var(--primary-color); color: #fff; margin-top: 20px;">Nhận tư vấn</a>
                    </section>
                </div>
                
            </div>
        </div>

        </div>

        <footer class="footer" >
            <div class="grid wide footer__content">
                <div class="row">
                    <div class="col l-2-4 m-4 c-6 ">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">NS Luxury</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Hướng dẫn đặt hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">
                                    Directview
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">
                                    Beanchview
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">
                                    Cityview
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-link">
                                    <i class="footer-item__icon fa-brands fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">
                                    <i class="footer-item__icon fa-brands fa-square-instagram"></i>
                                    Instargram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-link">
                                    <i class="footer-item__icon fa-brands fa-linkedin"></i>
                                    Linkdekin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-8 c-12">
                        <h3 class="footer__heading">Tải ứng dụng đặt hàng</h3>
                        <div class="footer__download">
                            <!-- <img src="" alt="Download QR" class="footer__download-qr"> -->
                            <div class="footer__download-apps">
                                <!-- <a href="" class="footer__download-apps__link">
                                <img src="" alt="Google play" class="footer__download-app-img">
                                </a>
                                <a href="" class="footer__download-apps__link">
                                <img src="" alt="App store" class="footer__download-app-img">
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="grid wide">
                    <p class="footer__text">© 2022 - Bản quyền thuộc về Công ty TNHH NS Luxury</p>
                </div>
            </div>
        </footer>
    </div>

</body>
<?php
include "access/js/validator.php";
include "access/js/main.php";
include "access/js/description.php";
include "access/js/notification.php";
include "access/js/cart.php";
include "access/js/calendar.php";

 ?>
<script>
    Validator({
            form: '#form-search',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#checkin', ' Vui lòng nhập trường này'),
                Validator.isRequired('#checkout', 'Vui lòng nhập trường này'),
                
            ]
        })

    
</script>
</html>

<?php
}
else{
    header("Location: login.php");
   	exit;
}
 ?>