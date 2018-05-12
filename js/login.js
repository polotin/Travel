function login_failed() {
    alert("login failed. invalid id or pwd");
}


function check_account(){
    $.ajax({
        type: "post",
        dataType: "script",
        url: "login.php",
        data: $("#login_form").serialize(),
    });
}