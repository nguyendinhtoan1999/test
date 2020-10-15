<?php 
include('header.php');
$query= mysqli_query($conn, "select *from product order by rand() LIMIT 4");
?>

<div class="banner" style="z-index: 1">
	<div class="row">
		<div class="col-md-7">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img style="height: 510px" class="d-block w-100" src="https://i.ytimg.com/vi/36HnmEcKDJk/maxresdefault.jpg" width="100%" alt="First slide">
					</div>
					<div class="carousel-item">
						<img style="height: 510px" class="d-block w-100" src="https://thietkehaithanh.com/wp-content/uploads/2019/06/huong-dan-thiet-ke-banner-dien-thoai-bang-photoshop.jpg"  width="100%" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img style="height: 510px" class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/news/07_2018/02/tintuc-kho-11.png"  width="100%" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-5 banner_2">
			<img style="height:264px" src="https://cellphones.com.vn/sforum/wp-content/uploads/2017/04/F1s-2017-Banner-web_slide_1320x640.jpg"
			width="100%">
			<img src="https://cellphones.com.vn/sforum/wp-content/uploads/2017/04/Hotsale-Banner-web_slide_1320x640.jpg" width="100%">
		</div>
	</div>

</div>
<div style="margin: 10px 0">
	<img src="images/banner quảng cáo/1200x75_1__2.jpg" width="100%" style="height: 50px">
</div>
<div class="hang">
	<div class="container">
		<div class="row">
			<div class="col-md-3 logo_hang wobble-to-top-right">
				<a  style="color: #000" href="product.php?id=2" title=""><img src="images/apple-removebg-preview.png" width="70px"></a>
			</div>
			<div class="col-md-3 logo_hang wobble-to-top-right">
				<a style="color: #000" href="product.php?id=1" title=""><img src="https://www.antconsult.vn/wp-content/uploads/logo-samsung.jpg" width="200px"></a>
			</div>
			<div class="col-md-3 logo_hang wobble-to-top-right">
				<a style="color: #000" href="product.php?id=4" title=""><img src="images/xiaomi.png" width="100px" style="margin-top: 11px"></a>
			</div>
			<div class="col-md-3 logo_hang wobble-to-top-right">
				<a style="color: #000" href="product.php?id=6" title=""><img src="images/oppo.png" width="100px" style="margin-top: 11px"></a>
			</div>

		</div>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-2" style="padding: 0">
				<h5 style="margin: 40px 0; margin-left:	14px">SẢN PHẨM NEW </h5>
			</div>
			<div class="col-md-3 " style=" margin: auto 0; padding: 0;font-size: 10px">
				<p style="color: #D3CCCC; padding: none;	">IPHONE <label style="margin-left: 10px"></label> SAMSUNG <label style="margin-left: 10px"></label> SONY <label style="margin-left: 10px"></label>XIAOMi<label style="margin-left: 10px"></label> LG <label style="margin-left: 10px"></label>OPPO</p>
			</div>
			<div class="col-md-7" style="width: 90%; height: 1px; background: #DED6D6; margin: auto 0">

			</div>
		</div>
		<div class="row">
			<?php foreach($query as $value){ ?>
				<div class="col-md-3">
					<div class="card mb-3 hove">
						<img src=" <?php echo $value['image']; ?> " class="card-img-top" width="100%" alt="...">
						<div class="tt">
							<p>Thông tin sản phẩm</p>
						</div>
						<div class="card-body">
							<p class="card-text animate__animated animate__heartBeat animate__repeat-3 animate__delay-0s" style="font-weight: bold; font-size: 10px"><img width="35px" src="images/new.gif"></p>
							<a><p style="font-size: 13px"><?php echo $value['tensp']; ?></p></a>
							<p style="font-size: 15px; font-weight: bold; color: red"><?php echo number_format($value['gia']); ?> đ</p>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
		<div class="row">
			<div class="col-md-2" style="padding: 0">
				<h5 style="margin: 40px 0; margin-left:	14px   ">SẢN PHẨM HOT </h5>
			</div>
			<div class="col-md-3 " style=" margin: auto 0; padding: 0;font-size: 10px">
				<p style="color: #D3CCCC; padding: none;	">IPHONE <label style="margin-left: 10px"></label> SAMSUNG <label style="margin-left: 10px"></label> SONY <label style="margin-left: 10px"></label>XIAOMi<label style="margin-left: 10px"></label> LG <label style="margin-left: 10px"></label>OPPO</p>
			</div>
			<div class="col-md-7" style="width: 90%; height: 1px; background: #DED6D6; margin: auto 0">

			</div>
		</div>
		<div class="row">
			<?php foreach($query as $value){ ?>
				<div class="col-md-3">
					<div class="card mb-3 hove">
						<img src=" <?php echo $value['image']; ?> " class="card-img-top" width="100%" alt="...">
						<div class="tt">
							<p>Thông tin sản phẩm</p>
						</div>
						<div class="card-body">
							<p class="card-text animate__animated animate__heartBeat animate__repeat-3 animate__delay-0s" style="font-weight: bold; font-size: 10px"><img width="35px" src="images/new.gif"></p>
							<a><p style="font-size: 13px"><?php echo $value['tensp']; ?></p></a>
							<p style="font-size: 15px; font-weight: bold; color: red"><?php echo number_format($value['gia']); ?> đ</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		
	</div>
	<div class="blog">
		<div class="container">
			<div class="row">
			<div class="col-md-2" style="padding: 0">
				<h5 style="margin: 40px 0; margin-left:	14px">TIN TỨC HOT</h5>
			</div>
			<div class="col-md-3 " style=" margin: auto 0; padding: 0;font-size: 10px">
				<p style="color: #D3CCCC; padding: none;	">IPHONE <label style="margin-left: 10px"></label> SAMSUNG <label style="margin-left: 10px"></label> SONY <label style="margin-left: 10px"></label>XIAOMi<label style="margin-left: 10px"></label> LG <label style="margin-left: 10px"></label>OPPO</p>
			</div>
			<div class="col-md-7" style="width: 90%; height: 1px; background: #DED6D6; margin: auto 0">

			</div>
		</div>
		</div>
		<div class="col-md-12">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="d-block w-100 ">
							<div class="row">
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/04/1296067/iphone-11-pro-unboxing_800x450-600x400.jpg" alt="Card image cap">
										<div class="card-body"><h5>Bốn phiên bản iPhone 12 lộ giá bán...</h5>
											<p class="card-text">iPhone 12, iPhone 12 mini, iPhone 12 Pro, iPhone 12 Pro Max lộ thêm thông số cấu hình, giá bán và thời điểm lên kệ.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/11/1298055/m31_800x450.jpg" alt="Card image cap">
										<div class="card-body"><h5>Samsung ra mắt Galaxy M31 Prime ...</h5>
											<p class="card-text">Samsung ra mắt Galaxy M31 Prime: Pin 6.000 mAh, camera chính 64 MP, 8 GB RAM với mức giá 5.3 triệu đồng.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/11/1298051/untitled3_800x450.png" alt="Card image cap">
										<div class="card-body"><h5>OnePlus sẽ ra mắt thêm OnePlus Nord...</h5>
											<p class="card-text">Đầu tháng 7. Tại thời điểm đó, hãng đã cho ra mắt mẫu điện thoại này với hai tùy chọn màu sắc là Xanh dương và Xám.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-block w-100 ">
							<div class="row">
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/04/1296067/iphone-11-pro-unboxing_800x450-600x400.jpg" alt="Card image cap">
										<div class="card-body"><h5>Bốn phiên bản iPhone 12 lộ giá bán...</h5>
											<p class="card-text">iPhone 12, iPhone 12 mini, iPhone 12 Pro, iPhone 12 Pro Max lộ thêm thông số cấu hình, giá bán và thời điểm lên kệ.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/11/1298055/m31_800x450.jpg" alt="Card image cap">
										<div class="card-body"><h5>Samsung ra mắt Galaxy M31 Prime ...</h5>
											<p class="card-text">Samsung ra mắt Galaxy M31 Prime: Pin 6.000 mAh, camera chính 64 MP, 8 GB RAM với mức giá 5.3 triệu đồng.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/11/1298051/untitled3_800x450.png" alt="Card image cap">
										<div class="card-body"><h5>OnePlus sẽ ra mắt thêm OnePlus Nord...</h5>
											<p class="card-text">Đầu tháng 7. Tại thời điểm đó, hãng đã cho ra mắt mẫu điện thoại này với hai tùy chọn màu sắc là Xanh dương và Xám.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-block w-100 ">
							<div class="row">
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/04/1296067/iphone-11-pro-unboxing_800x450-600x400.jpg" alt="Card image cap">
										<div class="card-body"><h5>Bốn phiên bản iPhone 12 lộ giá bán...</h5>
											<p class="card-text">iPhone 12, iPhone 12 mini, iPhone 12 Pro, iPhone 12 Pro Max lộ thêm thông số cấu hình, giá bán và thời điểm lên kệ.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/11/1298055/m31_800x450.jpg" alt="Card image cap">
										<div class="card-body"><h5>Samsung ra mắt Galaxy M31 Prime ...</h5>
											<p class="card-text">Samsung ra mắt Galaxy M31 Prime: Pin 6.000 mAh, camera chính 64 MP, 8 GB RAM với mức giá 5.3 triệu đồng.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card">
										<img class="card-img-top" src="https://cdn.tgdd.vn/Files/2020/10/11/1298051/untitled3_800x450.png" alt="Card image cap">
										<div class="card-body"><h5>OnePlus sẽ ra mắt thêm OnePlus Nord...</h5>
											<p class="card-text">Đầu tháng 7. Tại thời điểm đó, hãng đã cho ra mắt mẫu điện thoại này với hai tùy chọn màu sắc là Xanh dương và Xám.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		
	</div>
</div>
<?php include 'footer.php'; ?>