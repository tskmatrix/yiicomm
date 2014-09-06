<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductmediasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productmedias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmedias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productmedias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductMediaId',
            'ProductId',
            'SmallImageUrl:url',
            'ImageUrl:url',
            'ZoomImageUrl:url',
            // 'EmbedCode:ntext',
            // 'HtmlAlt',
            // 'HtmlTitle',
            // 'FeaturedText',
            // 'DisplayOrder',
            // 'IsVideo:boolean',
            // 'IsPrimary:boolean',
            // 'IsActive:boolean',
            // 'Comment:ntext',
            // 'created_by',
            // 'LastUpdatedBy',
            // 'updated_at',
            // 'created_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
