<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Rose</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/bootstrap.min.css">
    <link href="<?=base_url("/public/vendor/datatables/dataTables.bootstrap4.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .sorting_1{
            border: 0px !important;
        }
        .rounded{
            width:100px;
            margin-top: 20px;
        }
        .danger{
            color:#d66c88;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="text-center">
            <img src="<?=base_url("/public/images/rose-icon.png"); ?>" class="rounded">
            <h1 class="danger">Heartbeat<br>
            <a href="<?=base_url("/Attraction/createquize"); ?>"><button type="button" class="btn btn-outline-danger btn-lg"><i class="fa fa-plus"></i> Heartbeat</button></a><h1>
        </div>
        <div class="table">
           
  
        </div>
         
    </div> 
    <div class="d-flex justify-content-center">
        <div class="col-md-20">
            <div class="form-group">
            <div class="col-md-20">
                    <div class="form-group">
                    <label class="control-label">ผู้ทำควิช </label>
                    <input type="text" id="namedoquiz" class="form-control" name="namedoquiz" placeholder="ผู้ทำควิช">
                    </div>
                </div>
                    <label class="control-label">ค่าความมีเสน่ห์</label>
                    <input type="text" id="question2" class="form-control" name="question2" placeholder="ค่าความมีเสน่ห์">
                <div class="col-md-20">
                    <div class="form-group">
                    <label class="control-label">ค่านิสัย </label>
                    <input type="text" id="question3" class="form-control" name="question3" placeholder="ค่าความนิสัย">
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="form-group">
                    <label class="control-label">ค่ารอยยิ้ม</label>
                    <input type="text" id="question4" class="form-control" name="question4" placeholder="ค่าความรอยยิ้ม">
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="form-group">
                    <label class="control-label">ค่าความรวย</label>
                    <input type="text" id="question5" class="form-control" name="question5" placeholder="ค่าความรวย">
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="form-group">
                    <label class="control-label">ค่าคารมณ์</label>
                    <input type="text" id="question6" class="form-control" name="question6" placeholder="คารมณ์">
                    </div>
                </div>
                </div>
                <a href="<?=base_url(""); ?>"><button type="button" class="btn btn-outline-danger btn-lg"><i class="fa fa-plus"></i> Send</button></a><h1>
            </div> 
        </div>
                                
    </div>
                                
    
    <script src="<?=base_url("public/js/jquery.min.js"); ?>"></script>
    <script src="<?=base_url() ?>public/js/jquery.validate.min.js"></script>
    <script src="<?=base_url("/public/vendor/datatables/jquery.dataTables.js") ?>"></script>
    <script src="<?=base_url("/public/vendor/datatables/dataTables.bootstrap4.js") ?>"></script>
    
</body>
</html>