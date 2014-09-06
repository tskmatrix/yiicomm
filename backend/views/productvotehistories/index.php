<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Searchroductvotehistories */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productvotehistories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productvotehistories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productvotehistories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductVoteHistoryId',
            'CustomerId',
            'ProductId',
            'Message:ntext',
            'IsLiked:boolean',
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
