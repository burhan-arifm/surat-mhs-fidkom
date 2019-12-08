$(function(){
    // $.fn.datetimepicker.defaults.format = "dd MM yyyy"
    $.fn.datetimepicker.defaults.locale = "id-ID"
    $(".date").datetimepicker({
        format : 'LL'
    });
    // $(".date-new").datetimepicker('setDate', new Date())
    // var val = document.getElementsByClassName('date-edit')
    // var date = val[0].getAttribute('value').split('-')
    // $(".date-edit").datetimepicker('setDate', new Date(date[0], date[1] - 1, date[2]))
    $(".time").datetimepicker({
        format : 'HH:mm'
    });
});