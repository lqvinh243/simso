<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert sim number card</title>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Chào bạn đến với nơi rao bán sim với giá cực khủng!
            </div>
            <div class="card-body">
                <div class="card-block">
                    <div class="card mx-auto p-2" style="max-width:50%">
                        <form class="was-validated" action="insert_dataController" method="post" enctype="multidata/form-data">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input required name="email" type="email" class="form-control" id="email">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input required name="number" type="number" class="form-control" id="number"> 
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input required name="price" type="number" class="form-control" id="price">
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <input type="submit" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>