
<?php 
session_start();
include'connect.php';
$produer= mysqli_query($conn, "select hangsx, id from producer");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="owl/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="owl/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="Font/kazen-font-v1.0/demo-files/demo.css">
	<link rel="stylesheet" type="text/css" href="Font/kazen-font-v1.0/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fonts-awesome/css/all.css">
	<link href="css/hover.css" rel="stylesheet" media="all">
	
</head>
<body style="background: #f9f9f9">
	<div class="container">
		<div class="row">
			<div style="padding: 0" class="col-md-4">
				<p>Bạn đang xem tại: <a href="" title="" >Hà Nội</a></p>
			</div>
			<div class="col-md-6">
				<p>Hotline HN: 0969.120.120 - SG: 0965.123.123 - ĐN: 096.123.9797</p>
			</div>
			<div class="col-md-2">
				<p style="float: right;"><a style="color: red" href="product_cart.php" title=""><i class="fas fa-shopping-cart"></i></a></p>
			</div>
		</div>
	</div>
	<div class="menu_">
		<div class="logo">
			<a href="index.php" title=""><img src="images/logo_03.png" width="100%" style="width: 110px; padding: 10px; float: left"></a>
			<div class="kt">
				<form action="search.php">
					<input style="padding: 18.5px; border-radius: 5px; " type="text" name="timkiem" placeholder="Nhập tên sản phẩm ...">
					<button type="submit" class="btn btn-primary">Tìm Kiếm</button>
				</form>
			</div>
		</div>
		<ul>
			<li><a href="index.php" title="">TRANG CHỦ</a></li>
			<li class="me" ><a title="">ĐIỆN THOẠI <i class="fas fa-caret-down"></i></a></li>
			<li class="me_1"><a>TABLET <i class="fas fa-caret-down"></i></a></li>
			<li><a href="" title="">TIN TỨC</a></li>
			<li><a href="" title="">LIÊN HỆ</a></li>
		</ul>
		
	</div>
	<div class="menu_con " style="	background: #e11b1e;">
		<ul>
			
			<li><a style="color: #fff" href="product.php?id=0" title="">All Sản Phẩm</a></li>
			<?php foreach ($produer as $a) {?>
				<li><a style="color: #fff" href="product.php?id=<?php echo $a['id']; ?>" title=""><?php echo $a['hangsx']; ?></a></li>
			<?php } ?>
		</ul>
	</div>