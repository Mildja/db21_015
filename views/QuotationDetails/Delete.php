<?php
include('connection_connect.php');
$sql = "SELECT * FROM Product";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Multiple Dropdown - itoffside.com</title>
<link href="assets/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
<div class="card">
<div class="card-body">


<form>
<div class="form-row">
<div class="form-group col-md-4">
<label for="Product">สินค้า</label>
<select name="P_ID" id="Product" class="form-control">
<option value="">เลือกสินค้า</option>
<?php while($result = mysqli_fetch_assoc($query)): ?>
<option value="<?=$result['P_ID']?>"><?=$result['P_name']?></option>
<?php endwhile; ?>

</select>
</div>
<div class="form-group col-md-4">
<label for="amphure">อำเภอ</label>
<select name="amphure_id" id="amphure" class="form-control">
<option value="">เลือกอำเภอ</option>
</select>
</div>     


</form>
</div>
</div>
</div>
<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
</body>
</html>
<?php
mysqli_close($conn);
