<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Rose</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url("/public/images/rose-icon.png"); ?>">
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
        .card-img-top{
            width:60% !important;
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
            <table class="table table-bordered" id="table" width="100%" cellspacing="0" style="border: 0px solid #dee2e6;">
                <thead style="display:none">
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">ชื่อ xxxxxxxxx</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">สาขา xxxxxxxx</h6>
                                            <p class="card-text">
                                                สำนักวิชา xxxxxxx<br>
                                                ชั้นปี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xxxxx<br>
                                                เพศ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xxxxx</p>
                                            <a href="#" class="card-link"><i class="fa fa-share-alt"></i> คำถาม</a>
                                            <a href="#" class="card-link"><i class="fa fa-share-alt"></i> ค่าเสน่ห์</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>	
            </table>
        </div>
        <p class="text-center">© 2017-2018</p>  
    </div> 
    
    <script src="<?=base_url("public/js/jquery.min.js"); ?>"></script>
    <script src="<?=base_url() ?>public/js/jquery.validate.min.js"></script>
    <script src="<?=base_url("/public/vendor/datatables/jquery.dataTables.js") ?>"></script>
    <script src="<?=base_url("/public/vendor/datatables/dataTables.bootstrap4.js") ?>"></script>
    <script>
    var base_url = "<?=base_url();?>";
    var gender = ["","ชาย","หญิง"];
    var genderPic = ["","male.jpg","female.jpg"];
    var table = $('#table').DataTable({
        "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "sProcessing":   "กำลังดำเนินการ...",
                "emptyTable": "ไม่พบข้อมูล",
                "info": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
                "infoEmpty": "ไม่พบข้อมูล",
                "infoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "lengthMenu": "_MENU_ รายการ",
                "zeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก", // This is the link to the first page
                    "sPrevious": "ก่อนหน้า", // This is the link to the previous page
                    "sNext": "ถัดไป", // This is the link to the next page
                    "sLast": "หน้าสุดท้าย" // This is the link to the last page
                }
            },
            "responsive": true,
            "bLengthChange": false,
            "searching": false,
            "processing": true,
            "serverSide": true,
            "orderable": false,
            "pageLength": 16,
            "ajax":{
                "url": base_url+"api/Target/search",
                "dataType": "json",
                "type": "POST",
                "data": function ( data ) {
                    // data.column = $("#column").val()
                }
            },
            "columns": [
                null
            ],
            "columnDefs": [
                {
                    "targets": 0,
                    "data": null,
                    "render": function ( data, type, full, meta ) {
                        var html = '<div class="row">';

                        $.each(data, function( index, value ) {

                            
                           
                            html += '<div class="col-lg-3 ">'
                                    +'<div class="card" style="width: 18rem;">'
                                        +'<div class="text-center">'
                                            +'<img class="card-img-top" src="'+base_url+'/public/images/'+genderPic[value.gender]+'" alt="Card image cap">'
                                        +'</div>'
                                        +'<div class="card-body">'
                                            +'<h5 class="card-title">ชื่อ '+value.name+'</h5>'
                                            +'<h6 class="card-subtitle mb-2 text-muted">สาขา '+value.acdamy+'</h6>'
                                            +'<p class="card-text">'
                                                +'สำนักวิชา '+value.acdamy+'<br>'
                                                +'ชั้นปี &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+value.year+'<br>'
                                                +'เพศ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+gender[value.gender]+'</p>'
                                            +'<a href="#" class="card-link"><i class="fa fa-share-alt"></i> คำถาม</a>'
                                            +'<a href="#" class="card-link"><i class="fa fa-share-alt"></i> ค่าเสน่ห์</a>'
                                        +'</div>'
                                    +'</div>'
                                 + '</div>';
  
                        });

                        html += '</div>';
                        return html;
                    }
                }
            ]
    });
    </script>
</body>
</html>