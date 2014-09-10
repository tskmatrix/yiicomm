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
                ['label' => 'Home', 'url' => ['/site/index']],
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
	            	]];
            }
            
            if(!Yii::$app->user->can('suppliergmanager'))
            {
            	$menuItems[] = ['label' => 'Suppliers', 'items' => [
		            	['label'=> 'Supplier Brands', 'url' => ['/suppliersbrands/index']],
		            	['label'=> 'Suppliers People', 'url' => ['/supplierspeople/index']],
		            	['label'=> 'Suppliers', 'url' => ['/productmedias/index']],
	            	]];
            }
            
            if(!Yii::$app->user->can('marketinggmanager'))
            {
            	$menuItems[] = ['label' => 'Marketing', 'items' => [
		            	['label'=> 'Supplier Brands', 'url' => ['/suppliersbrands/index']],
		            	['label'=> 'Supplier Types', 'url' => ['/suppliertypes/index']],
		            	['label'=> 'Suppliers People', 'url' => ['/supplierspeople/index']],
		            	['label'=> 'Suppliers', 'url' => ['/productmedias/index']],
		            	['label'=> 'Affilliates', 'url' => ['/affiliates/index']],
		            	['label'=> 'Campaigns', 'url' => ['/campaigns/index']],
		            	['label'=> 'Campaign Products', 'url' => ['/campainproducts/index']],
		            	['label'=> 'Campaign Types', 'url' => ['/campaigntypes/index']],
		            	['label'=> 'Queued Emails', 'url' => ['/Queuedemails/index']],
		            	['label'=> 'Gift Cards', 'url' => ['/Giftcards/index']],
		            	['label'=> 'Gift Card Types', 'url' => ['/Giftcardtypes/index']],
		            	['label'=> 'Gift Card Histories', 'url' => ['/Giftcardhistories/index']],
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
