var pathImage = base_url+"public/image/";

$.ajaxSetup({
    beforeSend: function(xhrObj){
        xhrObj.setRequestHeader("Authorization", "Bearer "+localStorage.token)
    }
});

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading-modal"); },
    ajaxStop: function() { $body.removeClass("loading-modal"); }    
});

var deleteUrl = null;
var modalUrl = null;
function fnDelete(option) {
   $("#lebel-delete").html(option.label);
   $("#content-delete").html(option.content);
   $("#delete-modal").modal("show");
   deleteUrl = base_url+"api"+option.url;
   modalUrl = option.gotoUrl;
}

function showMessage(message, url=null){
    if(message == 200){
        $("#success-modal").modal("show");
        $("#content-success").html("บันทึกสำเร็จ");
    }else if(message == 404 || message == 1005 || message == 1004 || message == 1003){
        $("#lebel-warning").html("คำเตือน");
        var dangerContent = $("#content-danger");
        if(message == 1004){
            dangerContent.html("ข้อมูลนี้ถูกใช้งาน");
        }else if(message == 1005){
            dangerContent.html("ข้อมูลนี้ถูกลบแล้ว");
        }else if(message == 1003){
            dangerContent.html("ลบไม่สำเร็จ");
        }else if(message == 404){
            dangerContent.html("เกิดข้อผิดพลาด");
        }else{
            dangerContent.html("เกิดข้อผิดพลาด");
        }

        $("#danger-modal").modal("show");
    }else{
        // 1001 1002 3001 3002 2001
        $("#lebel-warning").html("ผิดพลาด");
        var warningContent = $("#content-warning");
        if(message == 1001){
            warningContent.html("สร้างไม่สำเร็จ");
        }else if(message == 1002){
            warningContent.html("แก้ไขไม่สำเร็จ");
        }else if(message == 3001 || message == 3002){
            warningContent.html("ชื่อหรือถูกใช้งานแล้ว");
        }else{
            warningContent.html("เกิดข้อผิดพลาด");
        }

        $("#warning-modal").modal("show");
    }

    modalUrl = url;
}

$("#success-modal, #warning-modal, #danger-modal").on('hidden.bs.modal', function () {
    if(modalUrl != null){
        window.location = base_url+modalUrl;
    }
});

$("#btn-delete-modal").click(function(){
    $.get(deleteUrl,{},function(data){
        $("#delete-modal").modal("hide");
        showMessage(data.message, modalUrl);
    });
})