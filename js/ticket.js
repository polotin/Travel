function order_ticket(){
    var scenic_id = $.getUrlParam("scenic_id");
    console.log($("#text_box").val());
    $.ajax({
        type: "post",
        dataType: "script",
        url: "ticket_presenter.php",
        data: "action=order_ticket&scenic_id="+scenic_id+"&num="+$("#text_box").val()+"&price="+$("#price").html()+"&scenic_name="+$("#scenic_name").html()
    });
}

(function ($) {
    $.getUrlParam = function (name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }
})(jQuery);

function login(){
    $(location).attr('href', 'login.html');
}


function register(){
    $(location).attr('href', 'register.html');
}

function logout(){
    $.ajax({
        type: "post",
        dataType: "text",
        url: "index.php",
        data: "action=logout"
    });
    $("#li_login").css("display","block");
    $("#li_reg").css("display","block");
    $("#li_name").css("display","none");
    $("#li_logout").css("display","none");
}