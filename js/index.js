$(document).load(function () {
    $.ajax({
        type: "post",
        dataType: "script",
        url: "pages/index.php",
        data: "action=check_session",
    });
});

function load_hot() {
    $.ajaxSetup({cache: false });
    $("#section-hot").load("pages/index.php?action=load_hot");
}


function login(){
    $(location).attr('href', 'pages/login.html');
}

function register(){
    $(location).attr('href', 'pages/register.html');
}

function logout(){
    $.ajax({
        type: "post",
        dataType: "text",
        url: "pages/index.php",
        data: "action=logout"
    });
    $("#li_login").css("display","block");
    $("#li_reg").css("display","block");
    $("#li_name").css("display","none");
    $("#li_logout").css("display","none");
}