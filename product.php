<?php
include('header.php');
$id= isset($_GET['id']) ? $_GET['id']: 0;
$ids= isset($_GET['ids']) ? $_GET['ids']: 0;
$mh= isset($_GET['mh']) ? $_GET['mh']: 0;
$desc= isset($_GET['desc']) ? $_GET['desc']: 0;
if($id==0){
	
	$all= mysqli_query($conn, "select *from product");
}
else{
	$all= mysqli_query($conn, "select *from product where id_hang=$id");
}
if($ids==1){
	$all= mysqli_query($conn, "select *from product where gia<3000000");
}
else if($ids==2){
	$all= mysqli_query($conn, "select *from product where gia<5000000");
}else if($ids==3){
	$all= mysqli_query($conn, "select *from product where gia<10000000");
}else if($ids==4){
	$all= mysqli_query($conn, "select *from product where gia<20000000");
}else if($ids==5){
	$all= mysqli_query($conn, "select *from product where gia>20000000");
}
// lọc saen phẩm theo giá
if($mh==1){
	$all= mysqli_query($conn, "select product.image, product.tensp, product.gia, product_detail.screen from product join product_detail on product.id=product_detail.id_product where screen <5");
}
else if($mh==2){
	$all= mysqli_query($conn, "select product.image, product.tensp, product.gia, product_detail.screen from product join product_detail on product.id=product_detail.id_product where screen >=5 and screen <=5.5");
}
else if($mh==3){
	$all= mysqli_query($conn, "select product.image, product.tensp, product.gia, product_detail.screen from product join product_detail on product.id=product_detail.id_product where screen >5.5 and screen <=6.5");
}
else if($mh==4){
	$all= mysqli_query($conn, "select product.image, product.tensp, product.gia, product_detail.screen from product join product_detail on product.id=product_detail.id_product where screen >6.5");
}
// lọc sản phẩm theo kích cỡ  màn hình
if($desc==1){
	$all= mysqli_query($conn, "select *from product order by gia desc");
}
else if($desc==2){
	$all= mysqli_query($conn, "select *from product order by gia asc");
}
else if($desc==3){
	$all= mysqli_query($conn, "select *from product where id_hang !=2");
}
//sắp xếp sản phẩm
$hang= mysqli_query($conn, "select *from producer");
?>

<div class="container">
	<p style="font-weight: bold; color: #F2A952; font-size: 15px">Trang chủ > Điện thoại</p>
	<div class="row">
		
	</div>
	<div style="z-index: 1" class="row">
		<div class="col-md-12">
			<div>
				
			</div>
		</div>
		<div class="col-md-3">
			<div class="chuc_nang">
				<p style=" border: 1px solid #000; padding: 3px; border-radius: 3px; ">Lọc sản phẩm</p>
				<ul>
					<li class="cn_5 diss" ><a>Sắp xếp theo giá <i class="fas fa-sort-down"></i></a></li>
					<div class="sx dis">
						<ul>
							<li><a href="product.php?desc=1" title="">Giảm dần</a></li>
							<li><a href="product.php?desc=2" title="">Tăng dần</a></li>
						</ul>
					</div>
					<li class="cn_1 diss"><a>Mức giá <i class="fas fa-sort-down"></i></a></li>
					<div class="muc_gia dis">
						<ul>
							<li><a href="product.php?id=0" title="">All sản phẩm</a></li>
							<li><a href="product.php?ids=2" title="">Dưới 5 triệu</a></li>
							<li><a href="product.php?ids=3" title="">Dưới 10 triệu</a></li>
							<li><a href="product.php?ids=4" title="">Dưới 20 triệu</a></li>
							<li><a href="product.php?ids=5" title="">Trên 20 triệu</a></li>
						</ul>
					</div>
					<li class="cn_2 diss"><a>Hãng sản xuất <i class="fas fa-sort-down"></i></a></li>
					<div class="hangsx dis">
						<ul>
							<?php foreach ($hang as $val) {?>
							<li><a href="product.php?id=<?php echo $val['id']; ?>" title=""><?php echo $val['hangsx'] ?></a></li>
						<?php } ?>
						</ul>
					</div>
					<li class="cn_3 diss"><a>Màn hình <i class="fas fa-sort-down"></i></a></li>
					<div class="man_hinh dis">
						<ul>
							<li><a href="product.php?mh=1" title="">< 5 inches</a></li>
							<li><a href="product.php?mh=2" title=""> Từ 5 đến 5.5 inches</a></li>
							<li><a href="product.php?mh=3" title=""> Từ 5.5 đến 6.5 inches</a></li>
							<li><a href="product.php?mh=4" title="">>6.5 inches</a></li>
						</ul>
					</div>
					<li class="cn_4 diss"><a>Hệ điều hành <i class="fas fa-sort-down"></i></a></li>
					<div class="hdh dis">
						<ul>
							<li><a href="product.php?id=2" title="">IOS</a></li>
							<li><a href="product.php?desc=3" title="">Android</a></li>
						</ul>
					</div>
					
				</ul>

			</div>
			<!-- <div class="chuc_nang_con">

			</div> -->
		</div>
		<div class="col-md-9">
			<div class="row">
				<?php foreach($all as $value){ ?>
					<div style="margin-top: 10px" class="col-md-3">
						<div class="card mb-3 hove">
							<img src="<?php echo $value['image']; ?> " class="card-img-top" width="100%" alt="...">
							<div class="tt_2" style="text-align: center;">
								<img src="images/iphone/detail-ipmax.jpeg" width="100%">
							</div>
							<div style="padding: 0.25rem" class="card-body">

								<a href="product_detail.php?id=<?php echo $value['id']; ?>"><p style="font-size: 13px; text-decoration: none "><?php echo $value['tensp']; ?></p></a>
								<lable style="font-size: 15px; font-weight: bold; color: red"><?php echo number_format($value['gia']); ?> đ</lable>
								<a href="cart_process.php?id=<?php echo $value['id']; ?>&pro=0" style="margin-left: 75px" title=""><i class="fas fa-cart-plus"></i></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
</div>


<?php include('footer.php'); ?>