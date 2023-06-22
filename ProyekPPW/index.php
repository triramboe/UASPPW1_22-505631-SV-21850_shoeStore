<?php include_once  ("header.php")?>

    <!-- Home -->
    <section id="home">
        <img src="">
        <div class="container">
            <h3>NEW ARRIVALS</h3>
            <h1><span>Best Prices</span> This Season</h1>
            <a href="<?php echo buat_link_halaman('29')?>"><button href="product.html">SHOP NOW</button></a>
            
        </div>
    </section>
    <!-- end of home -->

    <!-- special promo -->
    <section class = "py-5" id="special">
        <div class = "container">
            <div class = "title text-center py-5">
                <h1 class = "position-relative d-inline-block"> SPECIAL PROMO </h1>
            </div>

            <div class = "special-list row g-0 pb-5">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('17')?>" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1"><?php echo ambil_judul('17')?></p>
                        <span class = "fw-bold d-block"><?php echo ambil_kutipan('17')?></span>
                        <a href = "#" class = "btn btn-dark mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = " <?php echo ambil_gambar('21')?>" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1"><?php echo ambil_judul('21')?></p>
                        <span class = "fw-bold d-block"><?php echo ambil_kutipan('21')?></span>
                        <a href = "#" class = "btn btn-dark mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('22')?>" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1"><?php echo ambil_judul('22')?>h</p>
                        <span class = "fw-bold d-block"><?php echo ambil_kutipan('22')?></span>
                        <a href = "#" class = "btn btn-dark mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('23')?>" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1"><?php echo ambil_judul('23')?></p>
                        <span class = "fw-bold d-block"><?php echo ambil_kutipan('23')?></span>
                        <a href = "#" class = "btn btn-dark mt-3">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="button-promo position-relative my-5 pb-5">
                <a href="promo.html"><button type="button" class="position-absolute top-0 start-50 translate-middle" href="promo.html">SHOW ALL</button></a>
            </div>
        </div>
    </section>
    <!-- end of special products -->


    <!-- offer -->
    <section id="offer">
        <div class="container position-relative">
            <div class="position-absolute top-100 start-50 translate-middle">
                <h1>Choose Your Best Running Shoes</h1>
                <a href="product.html"><button>SHOP NOW</button></a>
            </div>
        </div>
    </section>


    <!-- brand -->
    <section id = "brand" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block"> OFFICIAL PATHNER OF </i></h2>
            </div>
            <div class = "brand-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 my-auto">
                    <div class = "brand-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('25')?>" class = "w-100">
                    </div>
                </div>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 my-auto">
                    <div class = "brand-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('26')?>" class = "w-100">
                    </div> 
                </div>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 my-auto">
                    <div class = "brand-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('27')?>" class = "w-100">
                    </div>
                </div>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 my-auto">
                    <div class = "brand-img position-relative overflow-hidden">
                        <img src = "<?php echo ambil_gambar('28')?>" class = "w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include_once("footer.php")?>