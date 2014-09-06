<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Productpricehistories */

$this->title = $model->ProductPriceHistoryId;
$this->params['breadcrumbs'][] = ['label' => 'Productpricehistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productpricehistories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductPriceHistoryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductPriceHistoryId], [
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
            'ProductPriceHistoryId',
            'ProductId',
            'ProductOptionCombinationId',
            'ProductOptionPriceId',
            'OldPrice',
            'NewPrice',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
