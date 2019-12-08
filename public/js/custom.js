$(function(){
    $("#cetak").click(function () {
        var id_surat = $(this).data('id');
        var url = "/administrator/detail-surat/" + id_surat + "/cetak";
        document.getElementById('cetak').href = url;
    })
    $("#sunting").click(function () {
        var id_surat = $(this).data('id');
        var url = "/administrator/detail-surat/" + id_surat + "/sunting";
        document.getElementById('sunting').href = url;
    })
    $("#hapus").click(function () {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Surat yang telah dihapus tidak dapat dikembalikan kembali.',
            type: 'warning',
            showCancelButton: true,
            showCloseButton: true,
            confirmButtonText: 'Ya, hapus surat tersebut',
            cancelButtonText: 'Urungkan',
        }).then((result) => {
            if (result.value) {
                var id_surat = $(this).data('id');
                var route = "/administrator/detail-surat/" + id_surat;
                var token = $(this).data('token');
                $.ajax({
                    url: route,
                    type: 'POST',
                    data: {_method: 'delete', _token: token},
                    success: function () {
                        Swal.fire({
                            title: 'Terhapus',
                            text: 'Surat yang Anda pilih berhasil dihapus.',
                            type: 'success'
                        })
                    }
                })
            } else {
                
            }
        })
    })
});
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
$(document).ready(function () {
    $('#nip_orang_tua').mask('000000000000000000');
    $('#waktu_kunjungan').mask('00:00');
    $('#no_telepon').mask('000000000000');
    $('#semester').mask('SSSS');
    $('#nim').mask('0000000000')
})
!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-minus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
$(window).on('resize', function () {
    if ($(window).width() > 768) 
        $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
    if ($(window).width() <= 767)
        $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
    }
})
$(function(){
    $(".selector").select2();
});