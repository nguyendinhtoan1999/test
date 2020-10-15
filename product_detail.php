<?php 
include 'header.php';
$id= isset($_GET['id']) ? $_GET['id'] : 0;
$sql= "select producer.hangsx as 'hangsx',product_detail.image1,product_detail.image2, product_detail.image3, product.id,product.image, product_detail.screen as 'screen', product_detail.CPU as 'CPU', product_detail.camera as 'camera', product_detail.ram as 'ram', product_detail.rom as 'rom',product.gia, product_detail.pin as'pin', product.tensp as 'tensp', product_detail.detail as 'detail' from producer join product on product.id_hang = producer.id join product_detail on product_detail.id_product = product.id where product.id= $id";
$sp_phu= mysqli_query($conn,"select *from product order by rand() LIMIT 4");
$detail= mysqli_query($conn, $sql);

?>
<div style="background: #fff;" class="container">
	<p style="font-weight: bold; color: #F2A952; font-size: 15px">Trang chủ > Điện thoại > <?php foreach ($detail as $val) { echo $val['tensp'];

} ?></p>
<h3>Điện thoại <?php foreach ($detail as $val) { echo $val['tensp'];} ?></h3>
<div class="row">
	<div class="col-md-1">
		<?php foreach ($detail as $val) { ?>
			<img class="i img_0" src="<?php echo $val['image']; ?>" width="100%">
			<img class="i img_1" src="<?php echo $val['image1']; ?>" width="100%">
			<img class="i img_2" src="<?php echo $val['image2']; ?>" width="100%">
			<img class="i img_3" src="<?php echo $val['image3']; ?>" width="100%">

		<?php } ?>
	</div>
	<div class="col-md-4">
		<?php foreach ($detail as $val) { ?>
			<img class="img anh" src="<?php echo $val['image']; ?>" width="100%">
			<img class="img im1" src="<?php echo $val['image1']; ?>" width="100%">
			<img class="img im2" src="<?php echo $val['image2']; ?>" width="100%">
			<img class="img im3" src="<?php echo $val['image3']; ?>" width="100%">
		<?php } ?>
	</div>
	<div class="col-md-7">
		<div class="ifo">
			<label>Giá tại: <a href="" title="">Hà Nội </a> <lable style="color: red; font-weight: bold;"><?php foreach ($detail as $val) { echo number_format($val['gia']);} ?> đ</lable></label>
			<p>Màu sắc: <img src="images/Screenshot-(364)_03.png"></p>
			<p>Bộ nhớ: <label style="border: 1px solid #000; padding: 2px; border-radius: 3px">6-64GB <i class="fas fa-chevron-down"></i></label></p>
			<p>Chế độ bảo hành: <label style="border: 1px solid #000; padding: 2px; border-radius: 3px">Bảo hành mặc định <i class="fas fa-chevron-down"></i></label></p>
			<label style="font-weight: bold;">Khuyến mãi</label>
			<div class="col-md-12" style="">
				<ul style="list-style: none ;border: 1px solid #000; padding: 10px; border-radius: 3px; margin-left: -17px">
					<li>1. Tặng: <label style="color: red">Cường lực - Ốp lưng - Tai nghe</label> khi mua BHV</li>
					<li>2. Giảm: 100K áp dụng HSSV mua BHV tại <lable style="color: red">42 phố Vọng</lable></li>
					<li>3. Mua: Dán cường lực 5D chỉ 30K</li>
				</ul>
			</div>
			<a href="cart_process.php?id=<?php echo $id; ?>&pro=1" title="" style="background: #f98c46; color: #fff; " class="btn"><label style="font-weight: bold; font-size: 25px">MUA NGAY </label><br><label style="font-size: 15px">Giao hàng tận nơi miễn phí</label></a>
			<a href="" title="" style="background:#496cbe; color: #fff; margin-left: 45px" class="btn"><label style="font-weight: bold; font-size: 25px">MUA TRẢ GÓP </label><br><label style="font-size: 15px">Lãi xuất thấp</label></a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<?php foreach($detail as $val){ ?>
			<th style="color: #F2A952 "><b>Thông số kỹ thuật</b></th>
			<table class="table">				
				<tr>
					<td><b>Hãng sản xuất</b></td>
					<td>
						<?php echo $val['hangsx'];?>
					</td>
				</tr>
				<tr>
					<td><b>Màn Hình</b></td>
					<td><?php echo $val['screen']; ?>" Full HD</td>
				</tr>
				<tr>
					<td><b>CPU</b></td>
					<td><?php echo $val['CPU'];?></td>
				</tr>
				<tr>
					<td><b>Camera</b></td>
					<td><?php echo $val['camera'];?></td>
				</tr>
				<tr>
					<td><b>Pin</b></td>
					<td><?php echo $val['pin'];?> mah</td>
				</tr>
				<tr>
					<td><b>RAM</b></td>
					<td><?php echo $val['ram'];?> GB</td>
				</tr>
				<tr>
					<td><b>ROM</b></td>
					<td><?php echo $val['rom'];?> GB</td>
				</tr>
			</table>

		<?php } ?>
		<div class="row">
			<?php foreach ($sp_phu as $val) {?>
				<div class="col-md-4">
					<img style="margin-top: 12px" src="<?php echo $val['image']; ?>" width="100%">
				</div>
				<div class="col-md-8">
					<p style="font-size: 15px; font-weight: bold;"><?php echo $val['tensp']; ?></p>
					<p style="color: red"><?php echo number_format( $val['gia']); ?> đ</p>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="col-md-9">

		<div>
			<?php foreach ($detail as $val) {?>
				<p><?php echo $val['detail']; ?></p>
				<?php } ?>

			</div>
		</div>
	</div>

</div>


<?php include 'footer.php' ?>