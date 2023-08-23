<?php 
	include 'inc/header.php';

 ?>
 <style>
 	.images_1_of_4 .button a {
 		padding: 10px;
  
    background: #602D8D;
    color: #fff;
 	}
 </style>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Tất cả sản phẩm </h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">

				<?php 
	      	$tatcasp = $thuoc->tatcasp();
	      	if ($tatcasp){
	      		while ($result = $tatcasp->fetch_assoc()){
	      			?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['idthuoc']?>"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['tenthuoc']?></h2>
					 <p><?php echo $fm->textShorten($result['mota'],30)?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['giaban'])?>VND</span></p>
				     <div class="button"><span><a href="details.php?idthuoc=<?php echo $result['idthuoc']?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php
			}
		}
				?>
				


			</div>
			
			
    </div>
 </div>
<?php 
	include 'inc/footer.php';
 ?>

