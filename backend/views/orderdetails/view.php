<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Orderdetails */

$this->title = $model->OrderDetailId;
$this->params['breadcrumbs'][] = ['label' => 'Orderdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderdetails-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->OrderDetailId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->OrderDetailId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'OrderDetailId',
            'OrderId',
            'ProductId',
            'Quantity',
            'Price',
            'Amount',
            'DiscountedAmount',
            'TaxRate',
            'TaxAmout',
            'ShippedOn',
            'pProductCategoryId',
            'pSupplierId',
            'pBrandId',
            'pProductTypeId',
            'pGender',
            'pName',
            'pSupplierDescription:ntext',
            'pDescription:ntext',
            'pShortDescription',
            'pHtmlDescription',
            'pUrlName:url',
            'pMarketPrice',
            'pPriceFromSupplier',
            'pDiscountPercent',
            'pCommissionPercent',
            'pTaxPercent',
            'pBarcode',
            'pHasDifferentPriceForOptions:boolean',
            'deleted_at',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
