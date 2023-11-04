<?php
session_start();
?>
<div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <?php
                if (isset($_SESSION['hinh'])) {
                    $hinh_anh = $_SESSION['hinh'];
                    echo '<div class="avatar-circle" id="avatar" style="width: 40px; height: 40px; border-radius: 100%; overflow: hidden;">';
                    echo '<img style="width: 100%; height: 100%; object-fit: cover;" src="' . $hinh_anh . '" alt="Hình ảnh người dùng">';
                    echo '</div>';
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <div class="text-white">
                                <h3 class="pt-2">Xin chào admin đẹp trai!</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- This pushes the following item to the right -->
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <div class="text-white">
                                <a href="dang_xuat.php">
                                    <h5 class="text-white">Đăng xuất</h5>
                                </a>

                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="box_nav">
    <?php require "menu.php"; ?>
</div>