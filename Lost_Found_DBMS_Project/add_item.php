<?php include 'config.php'; if(!isset($_SESSION['user'])) header("Location: login.php"); ?>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
<div class="card p-4 shadow">
<h4>Add Item</h4>
<form method="POST">
<select name="type" class="form-control mb-2">
<option value="lost">Lost</option>
<option value="found">Found</option>
</select>
<input type="text" name="name" class="form-control mb-2" placeholder="Item Name" required>
<input type="text" name="loc" class="form-control mb-2" placeholder="Location" required>
<input type="date" name="date" class="form-control mb-2" required>
<button name="add" class="btn btn-primary">Add</button>
</form>
<?php
if(isset($_POST['add'])){
mysqli_query($conn,"INSERT INTO items(user_id,type,item_name,location,date)
VALUES('".$_SESSION['user_id']."','$_POST[type]','$_POST[name]','$_POST[loc]','$_POST[date]')");
echo "<div class='alert alert-success mt-2'>Added</div>";
}
?>
</div></div>