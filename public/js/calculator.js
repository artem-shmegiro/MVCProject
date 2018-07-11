$(document).ready(function () {

    $("input[name=send]").click(function () {
        var action = $("select[name=operation]").val();
        var first = $("input[name=first]").val() * 1;
        var second = $("input[name=second]").val() * 1;
        var result;
        if (action == '+') {
            result = first + second;
        } else if (action == '-') {
            result = first - second;
        } else if (action == '*') {
            result = first * second;
        } else if (action == '/') {
            result = first / second;
        }
        $("input[name=result]").val(result);
        sendAjaxForm('calcul_form', 'libs/save_operations.php', result);
    });

    function sendAjaxForm(form, url, res) {
        $.ajax({
            url: url,
            type: "POST",
            dataType: "html",
            data: $("#" + form).serialize() + "&result=" + res,
            cache: false,
            success: function (data) {
                alert(data);
            },
        });
    }
});
