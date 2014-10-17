<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<?= Html::csrfMetaTags() ?>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Yiicomm Administration',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Backend', 'url' => ['/site/index']],
                ['label' => 'Frontend', 'url' => '@publicface'],
            ];
            
            if(!Yii::$app->user->can('productmanager'))
            {
            	$menuItems[] = ['label' => 'Users', 'items' => [
		            	['label'=> 'Users', 'url' => ['/user/index']],
		            	['label'=> 'User Types', 'url' => ['/usertypes/index']],
		            	['label'=> 'User Rest Data', 'url' => ['/userrestdata/index']],
	            	]];
            }
            
            if(!Yii::$app->user->can('productmanager'))
            {
            	$menuItems[] = ['label' => 'Products', 'items' => [
		            	['label'=> 'Product Categories', 'url' => ['/productcategories/index']],
		            	['label'=> 'Product Types', 'url' => ['/producttypes/index']],
		            	['label'=> 'Products', 'url' => ['/products/index']],
		            	['label'=> 'Product Medias', 'url' => ['/productmedias/index']],
		            	['label'=> 'Related Products', 'url' => ['/productsrelated/index']],
		            	['label'=> 'Product Combinations', 'url' => ['/productoptioncombinations/index']],
		            	['label'=> 'Product Option Group Members', 'url' => ['/productoptiongroupmembers/index']],
		            	['label'=> 'Product Option Groups', 'url' => ['/productoptiongroups/index']],
		            	['label'=> 'Product Options', 'url' => ['/productoptions/index']],
		            	['label'=> 'Product Price Histories', 'url' => ['/productpricehistories/index']],
		            	['label'=> 'Product Vote Histories', 'url' => ['/productvotehistories/index']],
		            	['label'=> 'Brands', 'url' => ['/brands/index']],
	            	]];
            }
            
            if(!Yii::$app->user->can('suppliergmanager'))
            {
            	$menuItems[] = ['label' => 'Suppliers', 'items' => [
		            	['label'=> 'Brands', 'url' => ['/brands/index']],
		            	['label'=> 'Supplier Brands', 'url' => ['/suppliersbrands/index']],
		            	['label'=> 'Suppliers People', 'url' => ['/supplierspeople/index']],
		            	['label'=> 'Suppliers', 'url' => ['/suppliers/index']],
	            	]];
            }
            
            if(!Yii::$app->user->can('marketinggmanager'))
            {
            	$menuItems[] = ['label' => 'Marketing', 'items' => [
		            	['label'=> 'Customers', 'url' => ['/customers/index']],
		            	['label'=> 'Affilliates', 'url' => ['/affiliates/index']],
		            	['label'=> 'Campaigns', 'url' => ['/campaigns/index']],
		            	['label'=> 'Campaign Products', 'url' => ['/campaignproducts/index']],
		            	['label'=> 'Campaign Types', 'url' => ['/campaigntypes/index']],
		            	['label'=> 'Queued Emails', 'url' => ['/queuedemails/index']],
		            	['label'=> 'Gift Cards', 'url' => ['/giftcards/index']],
		            	['label'=> 'Gift Card Types', 'url' => ['/giftcardtypes/index']],
		            	['label'=> 'Gift Card Histories', 'url' => ['/giftcardhistories/index']],
	            	]];
            }
            
            if(!Yii::$app->user->can('marketinggmanager'))
            {
            	$menuItems[] = ['label' => 'Orders and Shipping', 'items' => [
		            	['label'=> 'Order Statuses', 'url' => ['/orderstatuses/index']],
		            	['label'=> 'Orders', 'url' => ['/orders/index']],
		            	['label'=> 'Order Details', 'url' => ['/orderdetails/index']],
		            	['label'=> 'Shipping Satauses', 'url' => ['/shippingstatuses/index']],
		            	['label'=> 'Shipping Types', 'url' => ['/shippingtypes/index']],
		            	['label'=> 'Shippings', 'url' => ['/shippings/index']],
		            	['label'=> 'Warehouses', 'url' => ['/warehouses/index']],
	            	]];
            }
            
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; TSKmatrix <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
