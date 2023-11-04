<div class="container my-5 ">
    <div class="row">
        <div class="col-md-4 "></div>
        <div class="col-md-4 ">
            <form action="dang_ky_dang_nhap.php" class="was-validated" method="POST">

                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="uname" placeholder="Vui lòng điền email" name="email_dang_nhap">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Vui lòng điền mật khẩu" name="mat_khau_dang_nhap">
                </div>

                <button type="submit" class="btn btn-primary" name="action" value="dang_nhap">Đăng nhập</button>
                <button type="submit" class="btn btn-primary" name="action" value="dang_ky">Đăng ký</button>


            </form>
        </div>
        <div class="col-md-4 "></div>
    </div>

</div>