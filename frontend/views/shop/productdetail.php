<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\IndexAsset;

$this->title = 'Yiicomm - Detail';

IndexAsset::register ( $this );

$this->params['breadcrumbs'][] = $this->title;
?>
<h1>shop/productdetail</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<!-- <pre>
<?php // echo 'Productmedias Array<br />';
// print_r($product);
// echo '<br />'; ?>
</pre> -->

        <div class="row-fluid">

        <!-- start: Page section -->
        <section class="col-md-9 page-sidebar pull-right">

            <div class="row-fluid">
                <!-- start: Product image -->
                <div class="col-md-6 product-images">

                    <div class="thumbnail big">
                        <a href="example/view.jpg" class="image" rel="prettyPhoto[product]"><img src="<?= Yii::$app->request->baseUrl ?>/img/products/catalog/<?= $product['ImageUrl'] ?>" alt=""/>
                            <span class="frame-overlay"></span>
                        </a>
                    </div>

                    <div class="row-fluid small">
                        <div class="col-md-4 thumbnail">
                            <a href="example/view.jpg" class="image" rel="prettyPhoto[product]"><img src="<?= Yii::$app->request->baseUrl ?>/img/products/catalog/<?= $product['ImageUrl'] ?>" alt=""/>
                                <span class="frame-overlay"></span>
                            </a>
                        </div>
                        <div class="col-md-4 thumbnail">
                            <a href="example/view.jpg" class="image" rel="prettyPhoto[product]"><img src="<?= Yii::$app->request->baseUrl ?>/img/products/catalog/<?= $product['SmallImageUrl'] ?>" alt=""/>
                                <span class="frame-overlay"></span>
                            </a>
                        </div>
                        <div class="col-md-4 thumbnail">
                            <a href="example/view.jpg" class="image" rel="prettyPhoto[product]"><img src="<?= Yii::$app->request->baseUrl ?>/img/products/catalog/<?= $product['ZoomImageUrl'] ?>" alt=""/>
                                <span class="frame-overlay"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- end: Product image -->
                <!-- start: Product title -->
                <div class="col-md-6 product-info">

                    <div class="inner product-title">
                        <div class="row-fluid">
                            <div class="col-md-8 title"><h1><?= $product['product']['Name'] ?></h1></div>
                            <div class="col-md-4 price">$<?= $product['product']['Price'] ?></div>
                        </div>
                    </div>

                    <div class="inner nobottom product-cart">
                        <form class="form-inline">
                            <label>Qty:</label>
                            <input type="text" placeholder="1">
                            <button type="submit" class="btn btn-inverse"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                        </form>
                    </div>
                    <!-- <div class="inner notop darken product-ratings">
                        <div class="row-fluid">
                            <div class="review-count col-md-6">
                                <a href="#"><i class="icon-comment"></i> 9 reviews</a>
                            </div>
                            <div class="review-stars col-md-6">
                                <span class="rated">
                                    <span class="star solid"></span>
                                    <span class="star solid"></span>
                                    <span class="star solid"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </span>
                            </div>
                        </div>
                    </div> -->

                </div>
                <!-- end: Product title -->
            </div>

            <div class="row-fluid">

                <div class="row-fluid product-tabs">
                    <section class="widget">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#additional" data-toggle="tab">Additional Information</a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane inner notop active" id="description">
                                <?= $product['product']['SupplierDescription'] ?>
                            </div>

                            <div class="tab-pane inner notop" id="additional">
                                <?= $product['product']['Description'] ?>
                            </div>

                        </div>
                    </section>
                </div>
                
            </div>

            <hr>

            <!-- start: Reviews -->
            <!-- <div class="row-fluid reviews">

                <div class="row-fluid reviews-title">
                    <div class="col-md-8 title"><h3>2 reviews for Lorem ipsum dolor sit amet</h3></div>
                    <div class="col-md-4 stars">
                        <span class="rated">
                            <span class="star solid"></span>
                            <span class="star solid"></span>
                            <span class="star solid"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </span>
                    </div>
                </div>

                <div class="media">
                    <a href="#" class="pull-left"><img class="media-object" src="img/avatar.png" alt=""/></a>
                    <div class="media-body">
                        <div class="inner">
                            <h4 class="media-heading">Jhon Doe - April 12, 2013:</h4>
                            <span class="rated">
                                <span class="star solid"></span>
                                <span class="star solid"></span>
                                <span class="star solid"></span>
                                <span class="star solid"></span>
                                <span class="star"></span>
                            </span>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum velit, cursus a fermentum eu, pulvinar eget felis. Pellentesque vestibulum lacus vitae elit consectetur pulvinar. Pellentesque sed lacus neque. Maecenas et arcu eget augue auctor commodo. Aliquam vitae dui lectus, ac aliquet lacus. </p>
                                <p>Duis eget nisl ante, non pulvinar tortor. Cras pellentesque feugiat sem, et tincidunt est accumsan sed. Integer venenatis nibh sit amet leo lacinia varius. Aenean non arcu ac tortor ornare convallis at fringilla turpis. Vestibulum tempor lacinia lectus et elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In egestas porta varius.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left"><img class="media-object" src="img/avatar.png" alt=""/></a>
                    <div class="media-body">
                        <div class="inner">
                            <h4 class="media-heading">Jhon Doe - April 11, 2013:</h4>
                            <span class="rated">
                                <span class="star solid"></span>
                                <span class="star solid"></span>
                                <span class="star solid"></span>
                                <span class="star solid"></span>
                                <span class="star"></span>
                            </span>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum velit, cursus a fermentum eu, pulvinar eget felis. Pellentesque vestibulum lacus vitae elit consectetur pulvinar. Pellentesque sed lacus neque. Maecenas et arcu eget augue auctor commodo. Aliquam vitae dui lectus, ac aliquet lacus. </p>
                                <p>Duis eget nisl ante, non pulvinar tortor. Cras pellentesque feugiat sem, et tincidunt est accumsan sed. Integer venenatis nibh sit amet leo lacinia varius. Aenean non arcu ac tortor ornare convallis at fringilla turpis. Vestibulum tempor lacinia lectus et elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In egestas porta varius.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid add-review">
                    <h3>Add Review</h3>
                    <form>
                        <div class="controls controls-row">
                            <input class="col-md-4" type="text" placeholder="Name"/>
                            <input class="col-md-4" type="text" placeholder="Email"/>
                            <div class="col-md-4 stars">
                                <span class="rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </span>
                            </div>
                        </div>

                        <textarea class="col-md-12" name="" id="" cols="30" rows="10" placeholder="Your Review"></textarea>
                        <a href="#" class="btn btn-inverse btn-submit-review">Submit Review</a>
                    </form>
                </div>

            </div> -->
            <!-- end: Reviews -->

            <hr>

            <div class="row-fluid">
                <h3>Related Products</h3>
            </div>

            <!-- start: products listing -->
            <div class="row-fluid shop-products">
                <ul class="thumbnails">
                    
                    <li class="item col-md-4 first">
                        <div class="thumbnail">
                            <a href="./product.html" class="image">
                                <img src="example/product-8.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$35</span>
                            </a>
                            <div class="inner notop nobottom">
                                <h4 class="title">Product #1</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <a href="#" class="btn btn-add-to-cart">Add<i class="icon-shopping-cart"></i></a>
                        </div>
                    </li>
                    <li class="item col-md-4">
                        <div class="thumbnail">
                            <a href="./product.html" class="image">
                                <img src="example/product-7.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$50</span>
                            </a>
                            <div class="inner notop">
                                <h4 class="title">Product #2</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <a href="#" class="btn btn-add-to-cart">View options</a>
                        </div>
                    </li>
                    <li class="item col-md-4">
                        <div class="thumbnail">
                            <a href="./product.html" class="image">
                                <img src="example/product-6.jpg" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$25</span>
                            </a>
                            <div class="inner notop">
                                <h4 class="title">Product #3</h4>
                                <p class="description">Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                        <div class="inner darken notop">
                            <a href="#" class="btn btn-add-to-cart">Add<i class="icon-shopping-cart"></i></a>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <!-- end: products listing -->

        </section>
        <!-- end: Page section -->

        <!-- start: Sidebar -->
        <aside class="col-md-3 sidebar pull-left">

            <section class="widget inner shopping-cart-widget">
                <h3 class="widget-title">Shopping Cart</h3>
                <!-- <div class="products">
                    <div class="media">
                        <a class="pull-right" href="./product.html">
                            <img class="media-object" src="example/prod-scs-1.jpg" alt=""/>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="./product.html">Canon EOS T4i</a></h4>
                            1 x $43
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-right" href="./product.html">
                            <img class="media-object" src="example/prod-scs-2.jpg" alt=""/>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="./product.html">Canon EOS 6D</a></h4>
                            1 x $12
                        </div>
                    </div>
                </div>
                <p class="subtotal">
                    <strong>Subtotal:</strong>
                    <span class="amount">$55</span>
                </p> -->
                <p class="buttons">
                    <a class="btn btn-inverse viewcart" href="#">View Cart</a>
                    <a class="btn btn-inverse checkout" href="#">Checkout &rarr;</a>
                </p>
            </section>

            <!-- start: Search widget -->
            <!-- <section class="widget search">
                <form id="search" class="input-append">
                    <input class="col-md-4" id="appendedInputButton" type="text" placeholder="Search" />
                    <input class="btn search-bt" type="submit" name="submit" value="Search" />
                </form>
            </section> -->
            <!-- end: Search widget -->

            <!-- start: Categories -->
            <section class="widget inner categories-widget">
                <h3 class="widget-title">Categories</h3>
                <ul class="icons clearfix">
                    <li><a href="#">Design</a> (5)</li>
                    <li><a href="#">General</a> (1)</li>
                    <li><a href="#">Photography</a> (8)</li>
                    <li><a href="#">Products</a> (19)</li>
                </ul>
            </section>
            <!-- end: Categories -->

            <!-- start: Filter by -->
            <!-- <section class="widget inner">
                <h3 class="widget-title">Filter by</h3>
                <ul class="icons check clearfix">
                    <li class="on"><a href="#">Free Shipping</a> (775)</li>
                    <li><a href="#">Rebates</a> (297)</li>
                    <li><a href="#">In stock</a> (548)</li>
                    <li><a href="#">New Release</a> (79)</li>
                </ul>
            </section> -->
            <!-- end: Filter by -->

            <!-- start: Filter by Brand -->
            <!-- <section class="widget inner">
                <h3 class="widget-title">Brand</h3>
                <ul class="icons check clearfix">
                    <li><a href="#">Canon</a> (116)</li>
                    <li><a href="#">Fujifilm</a> (41)</li>
                    <li><a href="#">Hasselblad</a> (14)</li>
                    <li><a href="#">Nikon</a> (151)</li>
                    <li><a href="#">Olympus</a> (71)</li>
                    <li class="on"><a href="#">Panasonic</a> (47)</li>
                </ul>
            </section> -->
            <!-- end: Filter by Brand -->

            <!-- start: Filter by price -->
            <!-- <section class="widget inner price-widget">
                <h3 class="widget-title">Price</h3>
                <ul class="unstyled clearfix">
                    <li><a href="#">$0 to $249.99</a> (251)</li>
                    <li><a href="#">$250 to $499.99</a> (169)</li>
                    <li><a href="#">$500 to $749.99</a> (195)</li>
                    <li><a href="#">$750 to $999.99</a> (65)</li>
                    <li><a href="#">$1000 to $1499.99</a> (40)</li>
                    <li><a href="#">$1500 to $1999.99</a> (18)</li>
                    <li><a href="#">$2000 to $2999.99</a> (20)</li>
                    <li><a href="#">$3000 to $3999.99</a> (13)</li>
                    <li><a href="#">$4000 to $4999.99</a> (2)</li>
                    <li><a href="#">$5000 to $9999.99</a> (11)</li>
                    <li><a href="#">$10000 and up</a> (28)</li>
                </ul>
                <div class="controls controls-row">
                    <form>
                        <input type="text" placeholder="from" class="col-md-4">
                        <input type="text" placeholder="to" class="col-md-4">
                        <a href="#" class="btn btn-inverse">GO</a>
                    </form>
                </div>
            </section> -->
            <!-- end: Filter by price -->

            <!-- start: Text Widget -->
            <section class="widget inner">
                <h3 class="widget-title">Ready to Purchase</h3>
                <p>Lorem ipsum dolor sit amet, consect <a href="#">etuer adipi scing</a> elit, sed diam nonummy nibh euis mod tinci dunt ut laoreet dolore magna</p>
                <a href="#" class="btn btn-large btn-danger">Purchase</a>
            </section>
            <!-- end: Text Widget -->

        </aside>
        <!-- end: Sidebar -->
        </div>


