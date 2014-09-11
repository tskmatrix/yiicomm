<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Campaignproducts */

$this->title = $model->CampaignProductId;
$this->params['breadcrumbs'][] = ['label' => 'Campaignproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaignproducts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CampaignProductId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CampaignProductId], [
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
            'CampaignProductId',
            'CampaignId',
            'ProductId',
            'Price',
            'Stock',
            'StockUnitId',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
