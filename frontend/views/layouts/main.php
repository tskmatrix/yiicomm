<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags()?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
</head>
<body>
    <?php $this->beginBody()?>
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Yiicomm',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top', //'span9 navbar navbar-static-top'
            ]
        ]);
        $menuItems = [
            [
                'label' => 'Home',
                'url' => [
                    '/site/index'
                ]
            ],
            [
                'label' => 'Shop',
                'url' => [
                    '/shop/index'
                ]
        	],
            [
                'label' => 'About',
                'url' => [
                    '/site/about'
                ]
            ],
            [
                'label' => 'Contact',
                'url' => [
                    '/site/contact'
                ]
            ]
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = [
                'label' => 'Signup',
                'url' => [
                    '/site/signup'
                ]
            ];
            $menuItems[] = [
                'label' => 'Login',
                'url' => [
                    '/site/login'
                ]
            ];
        } else {
            $menuItems[] = [
                'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => [
                    '/site/logout'
                ],
                'linkOptions' => [
                    'data-method' => 'post'
                ]
            ];
            $menuItems[] = [
                'label' => 'Administration',
                'url' => Yii::getAlias('@administration')
            ];
        }
                $menuItems[] = [
                '<a href="#" class="cart">',
                '<span class="quantity">2</span>',
                '<span class="amount"><i class="fa fa-shopping-cart"></i>$55</span>',
                '</a>',
                'label' => 'Cart',
                'url' => '#',
                'items' => [
                ['label'=>'',
                'url'=>''],
                '<div class="media">',
                '<a class="pull-right" href="index.php?r=site/static&view=product">',
                '<img class="media-object" src="img/products/prod-scs-1.jpg" alt=""/>',
                '</a>',
                '<div class="media-body">',
                '<h4 class="media-heading"><a href="index.php?r=site/static&view=product">Canon EOS T4i</a></h4>',
                '1 x $43',
                '</div>',
                '</div>',
                '<div class="media">',
                '<a class="pull-right" href="index.php?r=site/static&view=product">',
                '<img class="media-object" src="img/products/prod-scs-2.jpg" alt=""/>',
                '</a>',
                '<div class="media-body">',
                '<h4 class="media-heading"><a href="index.php?r=site/static&view=product">Canon EOS 6D</a></h4>',
                '1 x $12',
                '</div>',
                '</div>',
                '<p class="subtotal">',
                '<strong>Subtotal:</strong>',
                '<span class="amount">$55</span>',
                '</p>',
                '<p class="buttons">',
                Html::a(Html::button('View Cart',['class'=>'btn btn-inverse viewcart']),'#'),
                '<br/><br/>',
                Html::a(Html::button('Checkout',['class'=>'btn btn-inverse viewcart']), '#'),
                '</p>',
                ]
            ];
            echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                    ]);
                NavBar::end();
        ?>

        <div class="container-fluid">
        <?=Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []])?>
        <?= Alert::widget()?>
        <?= $content?>
        </div>
	</div>

<!-- start: Footer -->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-3 clearfix">
                <h3 class="widget-title">About Us</h3>
                <div class="widget-inner">
                    <p>Curabitur turpis elit, imperdiet a lacinia consequat, posuere in nisi. Etiam sed egestas lacus. Maecenas nec massa quis metus sollicitudin pellentesque in eget purus. </p>
					<address>
						<ul class="unstyled">
							<li>Contact Info</li>
							<li>Street Name 432/2, London, 90210</li>
							<li>(123) 456-7890</li>
							<li>(123) 456-7890</li>
							<li><a href="mailto:#">info@email.com</a></li>
						</ul>
					</address>
					<ul class="social clearfix">
						<li>
							<a class="facebook" href="#"></a>
						</li>
						<li>
							<a class="twitter2" href="#"></a>
						</li>
						<li>
							<a class="google-plus" href="#"></a>
						</li>
					</ul>				
                </div>
            </div>
            <div class="col-md-3 clearfix">
                <h3 class="widget-title">Shipping Info</h3>
                <div class="widget-inner">
                    <ul class="unstyled">
                        <li><a href="#">New products</a></li>
                        <li><a href="#">Top sellers</a></li>
                        <li><a href="#">Specials</a></li>
                        <!-- <li><a href="#">Manufacturers</a></li>
                        <li><a href="#">Suppliers</a></li> -->
                        <li><a href="#">Customer Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 clearfix">
                <h3 class="widget-title">Latest Tweets</h3>
                <!-- start: Twitter Widget -->
                <div class="widget-inner">
                    <div id="twitter-foot"></div>
                </div>
                <!-- end: Twitter Widget -->
            </div>

            <div class="col-md-3 clearfix">
                <!-- start: Flickr Widget -->
                <!-- <section class="widget inner">
                    <h3 class="widget-title">Flickr</h3>
                    <ul class="flickr clearfix"></ul>
                </section> -->
                <!-- end: Flickr Widget -->
            </div>			
        </div>
    </div>
</footer>
<!-- end: Footer -->

<!-- start: Footer menu -->
<section id="footer-menu">
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-6">
               <p class="pull-left">&copy; TSKmatrix <?= date('Y') ?></p>
			<p class="pull-right"><?= Yii::powered() ?></p>
            </div>
            <div class="col-md-6 payment">
                <img src="img/cards/visa_straight.png" alt=""/>
                <img src="img/cards/paypal.png" alt=""/>
                <img src="img/cards/discover.png" alt=""/>
                <img src="img/cards/aex.png" alt=""/>
                <img src="img/cards/maestro.png" alt=""/>
                <img src="img/cards/mastercard.png" alt=""/>
            </div>
        </div>
    </div>
</section>
<!-- end: Footer menu -->

    <?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
