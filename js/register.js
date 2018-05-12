$(document).ready(function () {
    $("input[name='id']").blur(function () {
        if ($.trim($("input[ name='id']").val()) == "") {
            $("input[name='id']").css('border-color', '#FF5B5B');
            $("#err_tag_id").css('display', 'block');
            $("#err_label_id").text("账号不能为空！");
        }
    });
    $("input[name='id']").focus(function () {
        $("input[name='id']").css('border-color', '#66AFE9');
        $("#err_label_id").text("");
        $("#err_tag_id").css('display', 'none');
    });

    $("input[ name='password']").blur(function () {
        if ($.trim($("input[ name='password']").val()) == "") {
            $("input[ name='password']").css('border-color', '#FF5B5B');
            $("#err_tag_pwd").css('display', 'block');
            $("#err_label_pwd").text("请输入密码！");
        }
    });
    $("input[ name='password']").focus(function () {
        $("input[ name='password']").css('border-color', '#66AFE9');
        $("#err_label_pwd").text("");
        $("#err_tag_pwd").css('display', 'none');
    });

    $("input[ name='password1']").blur(function () {
        if ($.trim($("input[ name='password1']").val()) == "") {
            $("input[ name='password']").css('border-color', '#FF5B5B');
            $("#err_tag_pwd1").css('display', 'block');
            $("#err_label_pwd1").text("请确认密码！");
        }
    });
    $("input[ name='password1']").focus(function () {
        $("input[ name='password1']").css('border-color', '#66AFE9');
        $("#err_label_pwd1").text("");
        $("#err_tag_pwd1").css('display', 'none');
    });
});

function check_pwd() {
    if ($.trim($("input[ name='id']").val()) == "") {
        $("input[name='id']").css('border-color', '#FF5B5B');
        $("#err_tag_id").css('display', 'block');
        $("#err_label_id").text("账号不能为空！");
        return false;
    } else if ($.trim($("input[name ='password']").val()) == "") {
        $("#err_tag_pwd").css('display', 'block');
        $("#err_label_pwd1").text("请输入密码！");
        return false;
    } else if ($("input[ name = 'password']").val() != $("input[ name = 'password1']").val()) {
        $("#err_tag_pwd1").css('display', 'block');
        $("#err_label_pwd1").text("两次输入的密码不一致！");
        return false;
    } else {
        $(".err_tag").css('display','none');
        return true;
    }
}

