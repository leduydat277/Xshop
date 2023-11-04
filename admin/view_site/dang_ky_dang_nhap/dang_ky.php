<div class="container my-5 ">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <form action="dang_ky_dang_nhap.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Email: </label>
                    <input type="hidden" name="ma_khach_hang">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Họ tên :</label>
                    <input type="text" class="form-control" id="ho_ten" placeholder="Enter name" name="ho_ten" required>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Hình ảnh :</label>
                    <input type="file" class="form-control" id="hinh" placeholder="Enter image" name="hinh">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" id="mat_khau" placeholder="Enter password" name="mat_khau" required>
                </div>
                <button type="submit" class="btn btn-primary" name="action2" value="dang_ky">Đăng ký</button>

            </form>
        </div>
        <div class="col-md-4 "></div>
    </div>

</div>