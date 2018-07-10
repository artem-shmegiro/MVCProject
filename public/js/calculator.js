$(document).ready(function () {

    $("input[name=send]").click(function () {
        кнопку "Расчёт"
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
    });
});
