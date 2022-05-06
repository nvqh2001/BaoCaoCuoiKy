<?php 
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($mysqli,$tv);
	$row=mysqli_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$row['hinh_anh'];
	?>
	<div class="single">
			<div class="container">
						<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
							
<div id="picture-frame">
			<img src="<?php echo $link_anh ?>" data-src="<?php echo $link_anh ?>" alt="" class="img-responsive"/>
		</div>
										<script src="js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		
		
		
			</div>
			</div>
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3><?php echo $row['ten'] ?></h3>
				
					
				 <div class="pr-single">
				  <p class="reduced "><?php echo $row['gia'] ?> đ</p>
				</div>
				<div class="block block-w3">
					<div class="starbox small ghosting"> </div>
				</div>
				<p class="in-pa">  </p>
			   	
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
					<div class="add add-3">
							<form>
								<input type='hidden' name='thamso' value='gio_hang' >
								<input type='hidden' name='id' value='<?php echo $id ?>' >
								<input type='text' name='so_luong' value='1' class="entry value" >
								<button class="btn btn-danger my-cart-btn my-cart-b">Add to Cart</button>
							</form>
					</div>
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		 

			</div>
		   <div class="clearfix"> </div>
	   </div>	
	   <br>
		<div class="col-md-12" style="height:500px">
			Mô tả:<br><?php echo $row['noi_dung'] ?>
		</div>		 
				
	</div>
</div>
	