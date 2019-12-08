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