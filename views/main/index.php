<?php
$tittle = "Inicio";

require "views/header.php";
?>
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="<?php echo constant('URL'); ?>public/images/banner-01.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> Freshshop</strong></h1>
                        <p class="m-b-40">Disfruta de la frescura del campo Colombiano.</p>
                        <p><a class="btn hvr-hover" href="#seccionCompras">Ir a Comprar</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="public/images/banner-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> Freshshop</strong></h1>
                        <p class="m-b-40">Disfruta de la frescura del campo Colombiano.</p>
                        <p><a class="btn hvr-hover" href="#seccionCompras">Ir a Comprar</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="<?php echo constant('URL'); ?>public/images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> Freshshop</strong></h1>
                        <p class="m-b-40">Disfruta de la frescura del campo Colombiano.</p>
                        <p><a class="btn hvr-hover" href="#seccionCompras">Ir a Comprar</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="<?php echo constant('URL'); ?>public/images/categories_img_01.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="<?php echo constant('URL'); ?>public/images/categories_img_02.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="<?php echo constant('URL'); ?>public/images/categories_img_03.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products" id="seccionCompras">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="<?php echo constant('URL'); ?>public/images/add-img-01.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="<?php echo constant('URL'); ?>public/images/add-img-02.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Frutas, Verduras, Granos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button data-filter=".top-featured">Todos los productos</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">Venta</p>
                        </div>
                        <img src="<?php echo constant('URL'); ?>public/images/big-img-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">Venta</p>
                        </div>
                        <img src="<?php echo constant('URL'); ?>public/images/big-img-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">Venta</p>
                        </div>
                        <img src="<?php echo constant('URL'); ?>public/images/big-img-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">Venta</p>
                        </div>
                        <img src="<?php echo constant('URL'); ?>public/images/big-img-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->


<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-01.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-02.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-03.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-04.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-05.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-06.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-07.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-08.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-09.jpg" alt="" />
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo constant('URL'); ?>public/images/instagram-img-05.jpg" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->

<?php

require "views/footer.php";

?>