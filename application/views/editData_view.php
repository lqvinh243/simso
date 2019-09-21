<?php 
defined('BASEPATH') or exit('No script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data and view</title>
    <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
    <?php require('narbar.php') ?>
    <div class="container mt-2">
        <div class="row m-2" >
            <a class="text-uppercase font-weight-bold mx-auto" href="<?php echo base_url() ?>index.php/showData_controller">Chỉnh sửa thông tin</a>
        </div>
        
         <div class="row">
            <?php 
                foreach($array_edit as $key =>$value):
            ?>
               <div class="card-body">
                <div class="card-block">
                    <div class="card mx-auto p-2" style="max-width:50%">
                        <form class="was-validated" action="<?php echo base_url() ?>index.php/showData_controller/updateData_controller" method="post" enctype="multidata/form-data">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input required name="id" type="hidden" class="form-control" id="id" value="<?= $value['id']  ?>">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input required name="email" type="email" class="form-control" id="email" value="<?= $value['email']  ?>">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input required name="number" type="number" class="form-control" id="number" value="<?= $value['number'] ?>"> 
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input required name="price" type="number" class="form-control" id="price" value="<?= $value['price'] ?>">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <input type="submit" class="btn btn-block btn-primary" value="Lưu">
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            </div>
            
         </div>
</body>
</html>