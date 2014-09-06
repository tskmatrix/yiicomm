<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchProductoptiongroupmembers */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productoptiongroupmembers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productoptiongroupmembers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productoptiongroupmembers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductOptionGroupMemberId',
            'ProductOptionGroupId',
            'Name',
            'DisplayOrder',
            'Comment:ntext',
            // 'created_by',
            // 'LastUpdatedBy',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
