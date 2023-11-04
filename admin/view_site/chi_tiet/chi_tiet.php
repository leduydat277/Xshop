<?php
session_start();
?>
<div class="product-details">
    <div class="product-image">
        <!-- Phần hiển thị ảnh sản phẩm -->
        <img src="public/<?php echo $chi_tiet_hang_hoa['hinh'] ?>" alt="Sản phẩm" style="width: 500px;">
    </div>
    <div class="product-description">
        <!-- Phần mô tả sản phẩm -->
        <h1><?php echo $chi_tiet_hang_hoa['ten_hang_hoa'] ?></h1>
        <p class="product-price">Giá: <?php echo $chi_tiet_hang_hoa['don_gia'] ?></p>
        <p><?php echo $chi_tiet_hang_hoa['mo_ta'] ?></p>
        <!-- <input type="hidden" name="action" value="create"> -->
        <input type="hidden" name='ma_san_pham' id="ma_san_pham" value="<?php echo $chi_tiet_hang_hoa['ma_hang_hoa'] ?>">
        <input type="hidden" name="so_luong" id="so_luong" value="1">
        <div id="popup" style="display: none; background-color: white; padding: 10px; position: fixed; top: 10px; right: 10px;">
            Đã thêm vào giỏ hàng !
        </div>
        <button type="submit" id="add">Thêm vào giỏ hàng</button>

        <div id="a"></div>
    </div>
</div>

<div class="related-products" style="background-color: #f7f7f7; padding: 20px;">
    <!-- Phần hiển thị các sản phẩm tương tự -->
    <h2 class="related-products-title" style="font-size: 24px; margin-bottom: 20px; border-bottom: 2px solid #333; padding-bottom: 10px;">Sản phẩm
        tương tự</h2>
    <div class="related-products-list" style="display: flex; flex-wrap: wrap; gap: 20px;">
        <!-- Phần hiển thị các sản phẩm tương tự -->
        <?php foreach ($loai_hang as $lh) { ?>

            <a href="./index.php?ma_hang_hoa=<?php echo $lh['ma_hang_hoa']; ?> &ma_loai=<?php echo $lh['ma_loai']; ?>">
                <div class="related-product-item" style="width: 200px; background-color: #fff; border: 1px solid #e1e1e1; padding: 10px; text-align: center; transition: transform 0.2s;">
                    <img src="public/<?php echo $lh['hinh'] ?>" alt="Sản phẩm" class="related-product-image" style="max-width: 100%; height: auto;">
                    <h5 class="related-product-name" style="font-size: 16px; margin-top: 10px;">
                        <?php echo $lh['ten_hang_hoa'] ?>
                    </h5>
                </div>
            </a>
        <?php } ?>
    </div>
</div>



<div class="comments">
    <!-- Phần bình luận -->
    <h2>Bình luận</h2>
    <div class="comment-form">
        <!-- Form nhập bình luận -->
        <?php
        if (isset($_SESSION['id'])) {

            echo '    <input type="hidden" id="ma_khach_hang" value="' . $_SESSION['id'] . '">';
            echo '    <input type="hidden" name="action" value="create">';
            echo '    <label for="comment">Bình luận:</label><br>';
            echo '    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>';
            echo '    <input type="button" name="action"id="binh_luan" value="Thêm bình luận">

            ';
        }
        ?>


    </div>

    <ul class="comment-list">
        <?php
        foreach ($binh_luan_by_id as $comment) {
        ?>
            <!-- Hiển thị bình luận bên trong một div -->
            <li class="comment">
                <div id="a">
                    <div class="comment-info">
                        <strong><?php echo $comment['ho_ten']; ?>:</strong> <!-- Hiển thị tên khách hàng -->
                    </div>
                    <div class="comment-content">
                        <?php echo $comment['noi_dung']; ?>
                        <!-- Hiển thị nội dung bình luận -->
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>

</div>
<script>
    $('#add').on('click', function() {

        var ma_san_pham = $('#ma_san_pham').val();
        var so_luong = $('#so_luong').val();
        var action = "create"; // Định nghĩa biến action và gán giá trị "create"



        // Tạo một đối tượng JavaScript chứa dữ liệu để gửi
        var dataToSend = {
            ma_san_pham: ma_san_pham,
            so_luong: so_luong,
            action: action
        };
        console.log("ma_san_pham: " + ma_san_pham);
        console.log("so_luong: " + so_luong);

        $.ajax({
            url: "gio_hang.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {
                // Hiển thị popup
                $("#popup").show();

                // Đặt thời gian chờ 1 giây (1000 milliseconds) trước khi ẩn popup
                setTimeout(function() {
                    // Ẩn popup sau 1 giây
                    $("#popup").hide();
                }, 1000);
            }
        });
    });



    $('#binh_luan').click(function() {
        var ma_san_pham = $('#ma_san_pham').val();
        var ma_khach_hang = $('#ma_khach_hang').val();
        var comment = $('#comment').val();
        var action = "create";

        var dataToSend = {
            ma_khach_hang: ma_khach_hang,
            ma_hang_hoa: ma_san_pham,
            noi_dung: comment,
            action: action
        };

        $.ajax({
            url: "binh_luan.php",
            method: "POST",
            data: dataToSend,
            success: function(data) {
                data = JSON.parse(data);

                $("#a").text(data);


                $('#comment').val('');
            }
        });
    });

    $('#binh_luan').click(function() {

        var ma_san_pham = $('#ma_san_pham').val();

        var action = "create2";


        // Tạo một đối tượng JavaScript chứa dữ liệu để gửi
        var dataToSend = {

            ma_hang_hoa: ma_san_pham,
            action: action

        };
        $.ajax({
            url: "binh_luan.php", // Đường dẫn tới tệp gio_hang.php
            method: "POST",
            data: dataToSend,
            success: function(data) {

            }
        });
    });
</script>