<?php session_start(); ?>
<section class="my_header">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3 ">
                <a href="./index.php">
                    <img src="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/logo.png?1681350496696" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Từ khoá tìm kiếm "
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <div class="fs-2 text-danger"><i class="fa-regular fa-phone-volume"></i></div>
                            </div>
                            <div class="col-9">
                                Tư vấn hỗ trợ<br>
                                <strong class="text-danger">0987654321</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col">


                        <div class="row">
                            <div class="col-3 ">
                                <div class="fs-2 text-danger">
                                    <?php
                                    if (isset($_SESSION['hinh'])) {
                                        $hinh_anh = $_SESSION['hinh'];
                                        echo '<div class="avatar-circle pr-2" id="avatar" style="width: 40px; height: 40px; border-radius: 100%; overflow: hidden;" >';
                                        echo '<img style="width: 100%; height: 120%; object-fit: cover;" src="' . $hinh_anh . '" alt="Hình ảnh người dùng">';
                                        echo '</div>';
                                    } else {
                                        echo '<i class="fa-solid fa-user"></i>';
                                    }
                                    ?>

                                    <div class="dropdown-menu" id="menu">
                                        <ul>
                                            <li><a href="sua_tk.php">Cập nhật tài
                                                    khoản</a></li>

                                            <li><a href="dang_xuat.php">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9">
                                <?php
                                if (isset($_SESSION['ho_ten'])) {
                                    $ho_ten = $_SESSION['ho_ten'];
                                    echo 'Xin chào<br>' . $ho_ten;
                                    //echo '<a href="dang_xuat.php">Đăng xuất</a>';
                                } else {
                                    echo '<a href="dang_ky_dang_nhap.php">';
                                    echo 'Xin chào<br>';
                                    echo '<strong class="text-danger">Đăng nhập</strong> </a>';
                                }

                                ?>
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col"><a href="#" class=" position-relative">
                            <span class="fs-2 "><i class="fa-solid fa-heart"></i></span>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a></div>
                    <?php if (1) { ?>
                    <div class="col"><a href="./gio_hang.php" class=" position-relative">
                            <span class="fs-2 "><i class="fa-regular fa-cart-shopping"></i></span>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                00
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a></div>
                    <?php } ?>
                    <div class="col"><a href="#" class=" position-relative">
                            <span class="fs-2 "><i class="fa-duotone fa-inbox"></i></span>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div><?php require("menu.php"); ?></div>
<script>
const avatar = document.getElementById('avatar');
const menu = document.getElementById('menu');

avatar.addEventListener('click', function(event) {
    menu.style.display = 'block'; // Hiển thị menu khi nhấn vào hình ảnh
    event.stopPropagation(); // Ngăn sự kiện click lan ra ngoài menu
});

document.addEventListener('click', function(event) {
    menu.style.display = 'none'; // Ẩn menu khi nhấn bất kỳ đâu ngoài menu
});

menu.addEventListener('click', function(event) {
    event.stopPropagation(); // Ngăn sự kiện click trên menu lan ra ngoài
});
</script>