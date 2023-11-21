
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./access/css/base.css">
    <link rel="stylesheet" href="./access/css/logincss/login.css">
    <link rel="stylesheet" href="./access/css/grid.css">
    <link rel="stylesheet" href="./access/css/responsive.css">

</head>
<body>

    
    <div class="auth-form-main">
        <div class="header-form">
            <div class="grid wide">
                <div class="header-content">
                    <div class="header-form-logo">
                        <div class="header-logo">NS Luxury</div>
                        <div class="header-state"></div>
                    </div>
                    <div class="heaeder-support"> <a href="">Bạn cần trợ giúp</a></div>
                </div>
                
            </div>
        </div>

     <!-- Login form -->

     <!--  -->
        <form class="auth-form" id="form-login">
                        <div class="auth-form__container">
                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">Đăng nhập</h3>
                                <span class="auth-form__switch-btn"><a href="#">Đăng ký</a></span>
                            </div>
        
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="auth-form__input" placeholder="Email của bạn" id="email">
                                    <span class="form-message"></span>
                                </div>
                                <div class="auth-form__group">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn" id="password">
                                    <span class="form-message"></span>
                                </div>             
                            </div>
        
                            <div class="auth-form__aside">
                                <div class="auth-form__help">
                                    <a href="#" class="auth-form__link auth-form__help-forgot">Đổi mật khẩu</a>
                                    <span class="auth-form__help-separate"></span>
                                    <a href="" class="auth-form__link">Cần trợ giúp</a>
                                </div>
                            </div>
        
                            <div class="auth-form__controls">
                                <button class="btn btn--primary btnLogin" onclick="login()">ĐĂNG NHẬP</button>
                            </div>
                        </div>
        
                        <div class="auth-form__socials">
                            <a href="https://www.facebook.com/" class="auth-form__socials--facebook btn btn--size-s btn--with-icon" target="_blank">
                                <i class="auth-form__socials-icon fa-brands fa-facebook"></i>
                                Đăng nhập với Facebook
                            </a>
                            <a href="https://accounts.google.com/" class="auth-form__socials--google btn btn--size-s btn--with-icon" target="_blank">
                                <i class="auth-form__socials-icon fa-brands fa-google"></i>
                                Đăng nhập với Google
                            </a>
                        </div>            
                    </form>


    <!-- Signupform -->
        <form  class="auth-form active" id="form-signup">
            <div class="auth-form__container">
            <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng ký</h3>
                <span class="auth-form__switch-btn"><a href="#">Đăng nhập</a></span>
            </div>  

            <div class="auth-form__form">
                <div class="auth-form__group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="auth-form__input" placeholder="Email của bạn" id="emailsignup">
                    <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                    <label for="password" class="form-label">Mật khẩu</label> 
                    <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn" id="passwordsignup">
                    <span class="form-message"></span>
                </div> 
                <div class="auth-form__group">
                    <label for="password-confirm" class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu" id="password-confirm">
                    <span class="form-message"></span>
                </div>              
            </div>

            <div class="auth-form__aside">
                <div class="auth-form__help">
                    <a href="#" class="auth-form__link auth-form__help-forgot">Gửi mã</a>
                    <span class="auth-form__help-separate"></span>
                    <a href="#" class="auth-form__link">Cần trợ giúp</a>
                </div>
            </div>

            <div class="auth-form__controls">
                <button class="btn btn-nomal auth-form__controls-back">TRỞ LẠI</button>
                <button class="btn btn--primary" onclick="signup()">ĐĂNG KÝ</button>
            </div>
            </div>

            <div class="spacer"></div>
             </form>
             <!-- form nhập mật khẩu cũ -->
            <form class="form-reset auth-form active">
                <div class="auth-form__form">
                    <div class="title-form-reset">
                        <div class="icon-reset"><i class="fa-solid fa-arrow-left"></i></div>
                         Mật khẩu cũ</div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Mật khẩu cũ" id="password-reset">
                        <span class="form-message"></span>
                    </div>
                    <div class="resetBtn">Tiếp theo</div>
                    </div>
            </form>

            <!-- form nhập mật khẩu mới -->

            <form class="form-new auth-form active">
                <div class="auth-form__form">
                    <div class="title-form-reset">
                        <div class="icon-reset"><i class="fa-solid fa-arrow-left"></i></div>
                         Mật khẩu mới</div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Mật khẩu mới" id="password-new">
                        <span class="form-message"></span>
                    </div>
                    <div class="resetBtn">Tiếp theo</div>
                    </div>
            </form>

             <div class="footer-form">
                <div class="footer-content">
                    <div class="footer-icon">
                        <i class="fa-solid fa-phone footer-icon-sub"></i>
                    </div>
                    <div class="footer-main">Hottline: 0365022208</div>
                </div>
            </div>

    <!-- Quên mật khẩu -->  
    </div>

    
    
</body>
<?php
session_start();
include 'access/js/validator.php';
include 'access/js/account.php' ;
?>
    <script>
        Validator({
            form: '#form-login',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#email', 'Email không được để trống'),
                Validator.isEmail('#email'),
                Validator.isRequired('#password', 'Mật khẩu không được để trống'),
                Validator.minLength('#password', 6)
            ]
        })
        function equalPassword(){
            let password = document.getElementById('passwordsignup').value;
            return password;
        }
        Validator({
            form: '#form-signup',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#emailsignup', 'Email không được để trống'),
                Validator.isEmail('#emailsignup'),
                Validator.isRequired('#passwordsignup', 'Mật khẩu không được để trống'),
                Validator.minLength('#passwordsignup', 6),
                Validator.isRequired('#password-confirm', 'Nhập lại mật khẩu'),
                Validator.minLength('#password-confirm',6),
                Validator.isConfirmed('#password-confirm',equalPassword,'Mật khẩu không khớp')
            ]
        })

        Validator({
            form: '.form-reset',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#password-reset', 'Mật khẩu không được để trống!'),
                Validator.minLength('#password-reset', 6)
            ]
        })

    </script>
</html>