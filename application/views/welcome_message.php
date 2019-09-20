<?php 
defined('BASEPATH') or exit('No script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<div class="content card">
			<h1 class="card-header">Wellcome!</h1>
			<br>
			<div class="card-body">
				<h3 class="card-tittle text-sm-center mb-2">Trang web bán sim số hàng đầu Việt Nam</h3>
				<div class="row px-1">
					<div class="card col-md-3 mx-auto" style="max-width:19rem">
						<div class="cardheader border-dark mb-2 mt-1 ">
							<div class="row">
								<a href="/insert_controller/" class="mx-auto d-block">Thêm số đẹp </a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-text m-1">
								<p>Chúng tôi sẽ giúp bạn rao bán dễ dàng với mức chiết khấu thấp nhất thị trường hiện nay</p>
							</div>
						</div>
					</div>
					<div class="card col-md-3 mx-auto" style="max-width:19rem">
						<div class="cardheader border-dark mb-2 mt-1 ">
							<div class="row">
								<a href="/Showdata_controller" class="mx-auto d-block">Tìm số cực đẹp </a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-text m-1">
								<p>Chúng tôi có những số chính chủ cực tài lộc đem lại may mắn cho người dùng</p>
							</div>
						</div>
					</div>
					<div class="card col-md-3 mx-auto" style="max-width:19rem">
						<div class="cardheader border-dark mb-2 mt-1 ">
							<div class="row">
								<a href="index.php/insert_controller/" class="mx-auto d-block">Thêm số đẹp </a>
							</div>
						</div>
						<div class="card-body">
							<div class="card-text m-1">
								<p>Chúng tôi sẽ giúp bạn rao bán dễ dàng với mức chiết khấu thấp nhất thị trường hiện nay</p>
							</div>
						</div>
					</div>
				</div>				
			</div>			
		</div>
	</div>
</body>
</html>
