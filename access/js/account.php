<script>
const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
const formLogin = $('#form-login')
const formSignup = $('#form-signup')
const loginBtn = formLogin.querySelector('.auth-form__switch-btn')
const signupBtn = formSignup.querySelector('.auth-form__switch-btn')
const state = $('.header-state');
const back = formSignup.querySelector('.auth-form__controls-back')
const reset = $('.auth-form__help-forgot')
const formReset = $('.form-reset')
const formNew = $('.form-new');
const clickLogin = $('#password')
const input = formSignup.querySelectorAll('.auth-form__input')


// Quay trở lại form trước
function backFormBegin(formBack, formNew){
    formBack.classList.remove('active');
    formNew.classList.add('active')
}
// Next form sau
function nextForm(formBack, formNew){
    formBack.classList.add('active')
    formNew.classList.remove('active');
}

// Thao tác signup, login
function signup(){
    const email = $('#emailsignup').value;
    console.log(email);
    var password = $('#passwordsignup').value;
    const type = "signup";
    const passwordConfirm = $('#password-confirm').value

    if(email == '' || password == '' || passwordConfirm == ''){
        alert('Đăng ký không thành công')
    }

    else{
        
        // var json = JSON.stringify(user);
        // localStorage.setItem(email, json);

        let isSuccess = sendInformation(email, password, type);
        if(isSuccess){
            alert('Đăng kí thành công');
        }
    }
    
}

async function login(){
    const email = $('#email').value;
    var password = $('#password').value;
    const type = "login";
    let isSuccess = await sendInformation(email, password, type);
    console.log(isSuccess);
    if(isSuccess){
        location.href = "index.php";
        alert("Đăng nhập thành công")
    }
    else{"Đăng nhập thất bại"}
}

 async function sendInformation(email, password, type){
    console.log(email);
    return new Promise((resolve, reject) => {
        let data = new FormData();
        data.append("email", email);
        data.append("password", password);
        data.append("type", type);

        fetch("app/controller/login.php", {
            method: "POST",
            body: data
        })
        .then(response => response.text())
        .then(responseData => {
            resolve(responseData); // Trả về kết quả từ máy chủ
        })
        .catch(error => {
            reject(error);
        });
    });}


var app = {
    // Chuyển sang form đăng kí và đặt lại mật khẩu
    changeFormSignup: function(value){
        const _this = this;
        loginBtn.onclick = function(){
            state.innerHTML = `${value}`
            nextForm(formLogin, formSignup)
        }

        var btnSubmit = $('.form-signup .btn--primary')

        for(let i = 0; i < input.length; i++){
            input[i].addEventListener('keypress', function(e){
                if(e.which == 13){
                    signup()
                    e.preventDefault();
                }
            })
        }

        // Nhập mật khẩu mới

        reset.onclick = function(){
            nextForm(formLogin, formReset)

            // Kiểm tra mật khẩu cũ
            var email = $('#email').value
            var user = localStorage.getItem(email);
            var data = JSON.parse(user);
            var passwordReset = $('#password-reset')
            var backLogin = $('.icon-reset')
            backLogin.onclick = () => {
                backFormBegin(formLogin, formReset)
            }
            passwordReset.onchange = function(){
            var confirmPassword = $('#password-reset').value

            // Nhập mật khẩu mới
            if(confirmPassword == data.password){
                var next =$('.resetBtn')
                next.onclick = () => {
                    nextForm(formReset, formNew)

                    var complete = formNew.querySelector('.resetBtn')
                    var newPassword = $('#password-new');
                    var back = formNew.querySelector('.icon-reset')
                    back.onclick = () => {
                        backFormBegin(formReset,formNew)
                    }
                    newPassword.onchange = () => {
                    var newPassword = $('#password-new').value;
                    if(newPassword != confirmPassword){
                        data.password = newPassword;
                    var json = JSON.stringify(data);
                    localStorage.setItem(email, json);
                    
                    complete.onclick = () => {
                        nextForm(formNew, formLogin)
                        alert('Thay đổi thành công')
                    }
                    
                    }

                    else{
                        alert('Mật khẩu chưa thay đổi!')
                    }
                     
                    }
                }
            }
            else {
                alert('Mật khẩu sai')
            }
        }
    }
    },

    // Chuyển sanng form đăng nhập
    changeFormLogin: function(value){
        clickLogin.focus();
        state.innerHTML = `${value}`
        signupBtn.onclick = function(){
        state.innerHTML = `${value}`
            nextForm(formSignup, formLogin)
        }

        back.onclick = function(){
        state.innerHTML = `${value}`
        nextForm(formSignup, formLogin)
        }
    },
    start: function(){
        this.changeFormSignup('Đăng ký');
        this.changeFormLogin('Đăng nhập');
    }
}

app.start();
</script>




