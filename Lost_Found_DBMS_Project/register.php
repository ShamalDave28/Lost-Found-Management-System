<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
<div class="card p-4 shadow" style="width:350px;">
<h3 class="text-center mb-3">Register</h3>
<form method="POST">
<input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="pass" class="form-control mb-3" placeholder="Password" required>
<button name="register" class="btn btn-success w-100">Register</button>
</form>
<a href="login.php" class="text-center d-block mt-2">Login</a>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['register'])){
mysqli_query($conn,"INSERT INTO users(name,email,password) VALUES('$_POST[name]','$_POST[email]','$_POST[pass]')");
header("Location: login.php");
}
?>