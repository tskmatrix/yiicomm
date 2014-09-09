<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchProducts */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

    		'Name',
            'IsFeatured:boolean',
            'ProductId',
            'ProductCategoryId',
           // 'SupplierId',
           // 'BrandId',
           // 'ProductTypeId',
            // 'Gender',
            // 'SupplierDescription:ntext',
            // 'Description:ntext',
            // 'ShortDescription',
            // 'HtmlDescription',
            // 'UrlName:url',
            // 'DiscountPercent',
            // 'CommissionPercent',
            // 'TaxPercent',
            // 'Price',
            // 'PriceMarket',
            // 'PriceSupplier',
            // 'MaximumPurchaseCount',
            // 'IsActive:boolean',
            // 'IsFeatured:boolean',
            // 'IsOnVote:boolean',
            // 'VoteCount',
            // 'Comment:ntext',
            // 'created_by',
            // 'LastUpdatedBy',
            // 'PublishedOn',
            // 'updated_at',
            // 'created_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
