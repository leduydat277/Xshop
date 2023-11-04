<table class="table">
    <thead>
        <tr>
            <th scope="col">Số thứ tự</th>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">giá sản phẩm</th>
            <th scope="col">số lượng</th>
            <th scope="col">tổng giá</th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($gio_hang_get_list as $index => $gio_hang) { ?>
        <tr>
            <th scope="row"><?php echo $index + 1 ?></th>
            <td><?php echo $gio_hang['ma_san_pham'] ?></td>
            <td><?php echo $gio_hang['ten_hang_hoa'] ?></td>
            <td><?php echo $gio_hang['don_gia'] ?></td>
            <td>
                <input type="button" value="+" class="tang" data-ma-san-pham="<?php echo $gio_hang['ma_san_pham'] ?>">

                <strong id="<?php echo "ma_san_pham" . $gio_hang['ma_san_pham'] ?>">
                    <?php echo $gio_hang['so_luong_san_pham'] ?></strong>

                <input type="button" value="-" class="giam" data-ma-san-pham="<?php echo $gio_hang['ma_san_pham'] ?>">
            </td>
            <td><?php echo $gio_hang['tong_gia'] ?></td>
            <td> <input type="button" value="Xoá" class="xoa" data-ma-san-pham="<?php echo $gio_hang['ma_san_pham'] ?>">
                <input type="hidden" name="xoa" value="xoa">
            </td>
            <td><a href="./dat_hang.php?id_gio_hang=<?php echo $gio_hang['id_gio_hang']; ?>"><input type="button"
                        class="dat_hang" value="Đặt hàng"></a>
            </td>


        </tr>
        <?php } ?>

</table>

<script>
$('.tang').on('click', function() {
    var ma_san_pham = $(this).data('ma-san-pham');
    var dataToSend = {
        ma_san_pham: ma_san_pham,
        action: "add" // Sử dụng biến "action" thay vì "ation"
    };

    $.ajax({
        url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
        method: "POST",
        data: dataToSend,
        success: function(data) {
            data = JSON.parse(data);
            console.log(data[3]);
            $(`#ma_san_pham${data[2]}`).text(data[3]);
            // Xử lý kết quả thành công từ máy chủ nếu cần
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
            console.log("Lỗi khi gửi yêu cầu: " + error);
        }
    });
});

$('.giam').on('click', function() {
    var ma_san_pham = $(this).data('ma-san-pham');
    var action = "tru"; // Sửa tên biến thành "action"
    var dataToSend = {
        ma_san_pham: ma_san_pham,
        action: action // Sử dụng biến "action" thay vì "ation"
    };

    $.ajax({
        url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
        method: "POST",
        data: dataToSend,
        success: function(data) {
            data = JSON.parse(data);
            console.log(data[3]);
            $(`#ma_san_pham${data[2]}`).text(data[3]);
            // Xử lý kết quả thành công từ máy chủ nếu cần
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
            console.log("Lỗi khi gửi yêu cầu: " + error);
        }
    });
});

$('.xoa').on('click', function() {
    var ma_san_pham = $(this).data('ma-san-pham');
    var action = "xoa"; // Sửa tên biến thành "action"
    var dataToSend = {
        ma_san_pham: ma_san_pham,
        action: action // Sử dụng biến "action" thay vì "ation"
    };

    $.ajax({
        url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
        method: "POST",
        data: dataToSend,
        success: function(data) {
            // Xử lý kết quả thành công từ máy chủ nếu cần
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
            console.log("Lỗi khi gửi yêu cầu: " + error);
        }
    });
});
</script>