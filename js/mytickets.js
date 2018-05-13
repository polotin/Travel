$(document).ready(function(){
    $.ajax({
        type: "post",
        dataType: "script",
        url: "ticket_presenter.php",
        data: "action=mytickets"
    });
});

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

    $(location).attr('href', '../index.php');
}