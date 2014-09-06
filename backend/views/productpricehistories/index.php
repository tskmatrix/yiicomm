<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchProductpricehistories */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productpricehistories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productpricehistories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productpricehistories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductPriceHistoryId',
            'ProductId',
            'ProductOptionCombinationId',
            'ProductOptionPriceId',
            'OldPrice',
            // 'NewPrice',
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
