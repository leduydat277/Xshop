<section class="mymaincontent my-3">
    <div class="container">
        <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/slider_1.jpg?1681350496696" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/slider_1.jpg?1681350496696" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://bizweb.dktcdn.net/100/429/689/themes/869367/assets/slider_1.jpg?1681350496696" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <!-- slider -->



        <div class="container my-2 pa 3 ">
            <div class="product-list mb-3 container">
                <div class="product_title border-bottom">
                    <strong class="bg-danger text-white ">Sản phẩm</strong>
                </div>
                <div class="product-list-s my-3">
                    <div class="row container">
                        <?php
                        foreach ($hang_hoa as $san_pham) {

                        ?>
                            <div class="col-md-3 mb-3">
                                <a href="./index.php?ma_hang_hoa=<?php echo $san_pham['ma_hang_hoa']; ?> &ma_loai=<?php echo $san_pham['ma_loai']; ?>">

                                    <img src="public/<?php echo $san_pham['hinh'] ?>" alt="" style="width: 230px; height: 200px;">

                                    <h4><?php echo $san_pham['ten_hang_hoa'] ?></h4>
                                    <h4><?php echo $san_pham['don_gia'] ?></h4>
                                    <!-- <input type="number" min="1" value="1" id="quantity"> -->
                                    <button class="btn btn-primary">Xem chi tiết</button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>