<?php include 'config.php'; if(!isset($_SESSION['user'])) header("Location: login.php"); ?>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
<h3>Welcome <?php echo $_SESSION['user']; ?></h3>
<div class="row mt-4">
<div class="col-md-4"><div class="card p-3 text-center shadow">
<h5>Add Item</h5><a href="add_item.php" class="btn btn-primary">Go</a></div></div>
<div class="col-md-4"><div class="card p-3 text-center shadow">
<h5>View Items</h5><a href="view_items.php" class="btn btn-success">Go</a></div></div>
<div class="col-md-4"><div class="card p-3 text-center shadow">
<h5>Search</h5><a href="search.php" class="btn btn-warning">Go</a></div></div>
</div>
</div>