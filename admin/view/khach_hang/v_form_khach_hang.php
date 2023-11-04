<div class="">
    <form class="row g-3" action="khach_hang.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
            <input type="hiden" name="action" value="<?php echo $action; ?>">
            <br>
            <label class="form-label">Mã khách hàng</label>
            <input type="text" class="form-control" name="ma_khach_hang" value="<?php echo $khach_hang_by_id['ma_khach_hang'] ?>">
            <br>
            <label class="form-label">Mật khẩu</label>
            <input type="text" class="form-control" name="mat_khau" value="<?php echo $khach_hang_by_id['mat_khau'] ?>">
            <br>
            <label class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="ho_ten" value="<?php echo $khach_hang_by_id['ho_ten'] ?>">
            <br>
            <label class="form-label">Hình </label>
            <input type="file" class="form-control" name="hinh" value="<?php echo $khach_hang_by_id['hinh'] ?>">
            <br>
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $khach_hang_by_id['email'] ?>">

            <button type="submit" class="btn btn-primary" style="padding: 5px 10px;  ">Lưu</button>
        </div>
    </form>
</div>