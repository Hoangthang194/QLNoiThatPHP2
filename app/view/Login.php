<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" 
	      href="../../admin/dist/css/alt/adminlte.login.css">
	<link rel="icon" href="../../admin/dist/img/AdminLTELogo.png">
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<form >
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		<img src="../../admin/dist/img/AdminLTELogo.png" 
	 		     class="w-25">
	 		<h3 class="display-4 fs-1 
	 		           text-center">
	 			       Login</h3>   
	 		</div>

	 	  <div class="mb-3">
		    <label class="form-label">
		           Email</label>
		    <input type="text"
		           name="email"
		           value="" 
		           class="form-control" id="email">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password" id="password">
		  </div>
		  
		  <button type="button" 
		          class="btn btn-primary" onclick="login()">
		          Login</button>
		</form>
	 </div>
</body>
<script>
	async function login(){
		const email = document.getElementById("email").value;
    	var password = document.getElementById("password").value;
    	const type = "admin";
    	let isSuccess = await sendInformation(email, password, type);
    	if(isSuccess){
			location.href = "index.php";
    	}
    	else{"Đăng nhập thất bại"}
	}

	async function sendInformation(email, password, type){
    return new Promise((resolve, reject) => {
        let data = new FormData();
        data.append("email", email);
        data.append("password", password);
        data.append("type", type);

        fetch("../controller/login.php", {
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

</script>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>