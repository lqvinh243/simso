<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View_data</title>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row m-2" >
            <a class="text-uppercase font-weight-bold" href="<?php echo base_url() ?>index.php/showData_controller">Danh sách các sim số đẹp</a>
        </div>
        
         <div class="row">
            <?php 
                foreach($dataformcontroller as $key =>$value):
            ?>
               <div class="col col-md-4 col-sm-6">
                    <div class="card card-block">
                        <h3 class="card-tittle">Số sim : <?php echo $value['number'] ?></h3>
                        <p class="card-text">Giá tiền <?php echo $value['price'] ?></p>
                        <a href="#" class="btn btn-primary">Liên hệ</a>
                    </div>
                </div>
            <?php endforeach;?>
            </div>
            
         </div>
</body>
</html>