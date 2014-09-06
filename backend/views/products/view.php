<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductId], [
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
            'ProductId',
            'ProductCategoryId',
            'SupplierId',
            'BrandId',
            'ProductTypeId',
            'Gender',
            'Name',
            'SupplierDescription:ntext',
            'Description:ntext',
            'ShortDescriptioon',
            'HtmlDescription',
            'UrlName:url',
            'DiscountPercent',
            'CommissionPercent',
            'TaxPercent',
            'Price',
            'PriceMarket',
            'PriceSupplier',
            'MaximumPurchaseCount',
            'IsActive:boolean',
            'IsFeatured:boolean',
            'IsOnVote:boolean',
            'VoteCount',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'PublishedOn',
            'UpdateOn',
            'created_at',
            'deleted_at',
        ],
    ]) ?>

</div>
