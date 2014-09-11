<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchCampaigns */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campaigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Campaigns', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CampaignId',
            'CampaignTypeId',
            'Name',
            'ShortDescription',
            'Description:ntext',
            // 'HtmlDescription',
            // 'DiscountPercent',
            // 'ImageUrl:url',
            // 'OrderLimit',
            // 'MaximumProductPurchaceLimit',
            // 'MinimumProductPurchaceLimit',
            // 'StartedOn',
            // 'EndedOn',
            // 'ShippingStartsOn',
            // 'ShippingEndsOn',
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
