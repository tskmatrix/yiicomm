<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchOrderdetails */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orderdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderdetails-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orderdetails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OrderDetailId',
            'OrderId',
            'ProductId',
            'Quantity',
            'Price',
            // 'Amount',
            // 'DiscountedAmount',
            // 'TaxRate',
            // 'TaxAmout',
            // 'ShippedOn',
            // 'pProductCategoryId',
            // 'pSupplierId',
            // 'pBrandId',
            // 'pProductTypeId',
            // 'pGender',
            // 'pName',
            // 'pSupplierDescription:ntext',
            // 'pDescription:ntext',
            // 'pShortDescription',
            // 'pHtmlDescription',
            // 'pUrlName:url',
            // 'pMarketPrice',
            // 'pPriceFromSupplier',
            // 'pDiscountPercent',
            // 'pCommissionPercent',
            // 'pTaxPercent',
            // 'pBarcode',
            // 'pHasDifferentPriceForOptions:boolean',
            // 'deleted_at',
            // 'Comment:ntext',
            // 'created_by',
            // 'LastUpdatedBy',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
