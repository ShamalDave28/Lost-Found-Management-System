<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
<div class="card p-4 shadow" style="width:350px;">
<h3 class="text-center mb-3">Login</h3>
<form method="POST">
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="password" name="pass" class="form-control mb-3" placeholder="Password" required>
<button name="login" class="btn btn-primary w-100">Login</button>
</form>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
$res=mysqli_query($conn,"SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[pass]'");
if(mysqli_num_rows($res)){
$row=mysqli_fetch_assoc($res);
$_SESSION['user']=$row['email'];
$_SESSION['user_id']=$row['id'];
header("Location: dashboard.php");
}else echo "Invalid Login";
}
?>