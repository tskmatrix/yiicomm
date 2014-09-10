<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Campaigns */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CampaignId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CampaignId], [
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
            'CampaignId',
            'CampaignTypeId',
            'Name',
            'ShortDescription',
            'Description:ntext',
            'HtmlDescription',
            'DiscountPercent',
            'ImageUrl:url',
            'OrderLimit',
            'MaximumProductPurchaceLimit',
            'MinimumProductPurchaceLimit',
            'StartedOn',
            'EndedOn',
            'ShippingStartsOn',
            'ShippingEndsOn',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
