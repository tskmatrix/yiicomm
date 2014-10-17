<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchShippings */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shippings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shippings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shippings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ShippingId',
            'OrderId',
            'OrderDetailId',
            'ShippingAddressText:ntext',
            'ShippingPerson',
            // 'ShippingNumber',
            // 'ShippingTypeId',
            // 'ShippingStatusId',
            // 'Comment:ntext',
            // 'created_by',
            // 'LastUpdatedBy',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
