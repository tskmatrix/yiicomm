<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\IndexAsset;
use yii\data\Pagination;
use yii\widgets\LinkPager;

$this->title = 'Yiicomm - Shop';

IndexAsset::register ( $this );

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
<h3>shop/index</h3>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>


<!-- start: Container
<div id="container">
    <div class="container"> -->
        <div class="row-fluid">

        <!-- start: Page section -->
        <section class="col-md-9 page-sidebar pull-right">

            <!-- start: Page title -->
            <div class="row-fluid page-title">
                <div class="inner">
                    <div class="page-header">
                        <h1>Shop page <small><i class="icon-angle-right "></i> <?= $pagetitle['Name'] ?></small></h1>
                    </div>
                </div>
            </div>
            <!-- end: Page title -->

            <!-- start: Results -->
            <div class="row-fluid shop-result">
                <div class="inner darken clearfix">
                    <div class="col-md-6 result-count">
                        I found <?= $countProducts ?> products. 
                        <?= 
		             	// display pagination
		             	LinkPager::widget([
             			'pagination' => $pages,
						'options' => ['class'=>'pagination pagination-right'],
             			]);
             			?>
                    </div>
                    <!-- <div class="col-md-6 result-ordering">
                        <div class="pull-right">
                            <select>
                                <option value="menu_order">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- end: Results -->

            <!-- start: products listing -->
            <div class="row-fluid shop-products">
                <ul class="thumbnails">
                    <!-- new row -->
                    <?php 
                    $rowCntr = 1;
                    foreach($products as $row)
                    {
	                    if($rowCntr == 1)
	                    {
	                    ?>
	                    <li class="item col-md-4 first">	
	                    <?php } else { ?>
	                    <li class="item col-md-4">
	                    <?php 	
	                    }
	                    ?>
                        <div class="thumbnail">
                        <?= Html::a('<img src="'. Yii::$app->request->baseUrl . '/img/products/catalog/'. $row['productmedias'][0]['ImageUrl']. '" alt="">
                                <span class="frame-overlay"></span>
                                <span class="price">$'. $row['Price'].'</span>', '?r=shop/productdetails&id='. $row['ProductId'] , ['class'=>'image']) ?>
                            <div class="inner notop nobottom">
                                <h4 class="title"><?= $row['Name'] ?></h4>
                                <p class="description"><?= $row['HtmlDescription'] ?></p>
                            </div>
                        </div>
                    </li>
                    <?php 
	                    if($rowCntr <= 2 ) {
							$rowCntr++;
	                    } else{ 
							$rowCntr = 1; 
						}
                    } // end the foreach
					 ?>
                </ul>
            </div>
            <!-- end: products listing -->

            <!-- start: Pagination -->
             <div class="pagination pagination-right">
             	
            </div> 
            <!-- end: Pagination -->

        </section>
        <!-- end: Page section -->

        <!-- start: Sidebar -->
        <aside class="col-md-3 sidebar pull-left">

            <section class="widget inner shopping-cart-widget">
                <!-- <h3 class="widget-title">Shopping Cart</h3>
                <div class="products">
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
            <section class="search widget">
				<form id="search" class="input-append">
					<input class="col-md-4" id="appendedInputButton" type="text" placeholder="Search" />
					<input class="btn search-bt" type="submit" name="submit" value="Search" />
				</form>
            </section>
            <!-- end: Search widget -->

            <!-- start: Categories -->
            <section class="widget inner categories-widget">
                <h3 class="widget-title">Categories</h3>
                <ul class="icons clearfix">
                <?php 
                foreach($sidebarcategories as $sbc)
                {
                ?>
                    <li><?= Html::a($sbc['Name'], '?r=shop/index&id='. $sbc['ProductCategoryId']) ?></li>
                <?php }?>
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

<!--     </div>
</div>
end: Container -->



</div>
