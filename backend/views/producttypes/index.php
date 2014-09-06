<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchProducttypes */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producttypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producttypes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Producttypes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductTypeId',
            'ProductCategoryId',
            'Name',
            'Comment:ntext',
            'created_by',
            // 'LastUpdatedBy',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
