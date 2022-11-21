<div class="banner">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="../layoutUser/img/banner1.png" style="width:100%; height: 500px;">
                </div>

                <div class="mySlides fade">
                    <img src="../layoutUser/img/banner2.jpg" style="width:100%;height: 500px;">
                </div>

                <div class="mySlides fade">
                    <img src="../layoutUser/img/banner4.png" style="width:100%;height: 500px;">
                </div>

                <!-- Next and previous buttons -->
                
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
<h2 style="margin: 12px 0 24px 84px; background-image: linear-gradient(to right,#ccc, rgba(204, 204, 204, 0.059));" class="header__nav-content">Top sản phẩm được yêu thích</h2>
        <div style="margin-bottom: 12px;" class="content-body full-width">
            <div class="nav__content-body max-width">
                <div class="favorite-product">
                    <div class="info-product">
                        <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                        </div>
                        <p class="name-product">Iphone 14 pro</p>
                        <spam class="price-product">10.000.000đ</spam>
                        <div >
                            <button  class="btn-product" type="submit">Mua</button>
                        </div>
                    </div>
                    <div class="info-product">
                        <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                        </div>
                        <p class="name-product">Iphone 14 pro</p>
                        <spam class="price-product">10.000.000đ</spam>
                        <div >
                            <button  class="btn-product" type="submit">Mua</button>
                        </div>
                    </div>
                    <div class="info-product">
                        <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                        </div>
                        <p class="name-product">Iphone 14 pro</p>
                        <spam class="price-product">10.000.000đ</spam>
                        <div >
                            <button  class="btn-product" type="submit">Mua</button>
                        </div>
                    </div>
                    
                </div>
                <div class="nav-menu">
                    <div class="header__nav-menu">
                        <p>Danh mục</p>
                    </div>
                    <ul class="list__nav-menu">
                        <li class="items-nav-menu"><a href="" class="link__nav-menu">Thời trang 1</a></li>
                        <li class="items-nav-menu"><a href="" class="link__nav-menu">Thời trang 2</a></li>
                        <li class="items-nav-menu"><a href="" class="link__nav-menu">Thời trang 3</a></li>
                        <li class="items-nav-menu"><a href="" class="link__nav-menu">Thời trang 4</a></li>
                        <li class="items-nav-menu"><a href="" class="link__nav-menu">Thời trang 5</a></li>
                    </ul>
                </div>

            </div>
            <div style="margin-bottom: 100px ; margin-top: 24px; background-color: #fff;" class="full-width">
                <h2 style="margin: 12px 0 24px 84px; background-image: linear-gradient(to right,#ccc, rgba(204, 204, 204, 0.059));" class="header__nav-content">Danh sách sản phẩm</h2>
                <div  style=""
                class="max-width">
                    <div class="list-product">
                        <?php 
                        foreach($newProduct as $product){
                            extract($product);
                            $imgProducts = $imgPath.$imgProduct;
                            echo '
                            <div class="product">
                            <div class="img-product" style="background-image: url('.$imgProducts.');" > 
                            </div>
                            <p class="name-product">'.$nameProduct.'</p>
                            <spam class="price-product">'.$priceProduct.'</spam>
                            <div >
                                <button  class="btn-product" type="submit">Mua</button>
                            </div>
                        </div>';
                        }
                        ?>
                        <!-- <div class="product">
                            <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                            </div>
                            <p class="name-product">Iphone 14 pro</p>
                            <spam class="price-product">10.000.000đ</spam>
                            <div >
                                <button  class="btn-product" type="submit">Mua</button>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                            </div>
                            <p class="name-product">Iphone 14 pro</p>
                            <spam class="price-product">10.000.000đ</spam>
                            <div >
                                <button  class="btn-product" type="submit">Mua</button>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                            </div>
                            <p class="name-product">Iphone 14 pro</p>
                            <spam class="price-product">10.000.000đ</spam>
                            <div >
                                <button  class="btn-product" type="submit">Mua</button>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                            </div>
                            <p class="name-product">Iphone 14 pro</p>
                            <spam class="price-product">10.000.000đ</spam>
                            <div >
                                <button  class="btn-product" type="submit">Mua</button>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-product" style="background-image: url('../upload/1571989dffd2aaf62d971b3f978438ac.png');" > 
                            </div>
                            <p class="name-product">Iphone 14 pro</p>
                            <spam class="price-product">10.000.000đ</spam>
                            <div >
                                <button  class="btn-product" type="submit">Mua</button>
                            </div>
                        </div> -->
                    </div>
                    
                </div>
            </div>
        </div>
