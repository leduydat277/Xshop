$(document).ready(function () {
    $('#tinh').on('change', function () {
        var id_tinh = $(this).val();
        $.ajax({
            url: "quan_huyen.php",
            method: "POST",
            dataType: "json",
            data: {
                id_tinh: id_tinh
            },
            success: function (data) {
                $('#quan_huyen').empty();
                $.each(data, function (i, huyen) { // Sửa tên biến quan_huyen thành huyen
                    $('#quan_huyen').append($('<option>', {
                        value: huyen.id,
                        text: huyen.name
                    }));
                });
                $('#phuong_xa').empty();
            }
        });
    });

    $('#quan_huyen').on('change', function () {
        var id_quan_huyen = $(this).val();
        $.ajax({
            url: "phuong_xa.php",
            method: "POST",
            dataType: "json",
            data: {
                id_quan_huyen: id_quan_huyen
            },
            success: function (data) {
                $('#phuong_xa').empty();
                $.each(data, function (i, phuong_xa) {
                    $('#phuong_xa').append($('<option>', {
                        value: phuong_xa.id,
                        text: phuong_xa.name
                    }));
                });

            }
        });
    });


});
