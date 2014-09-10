<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcardhistories */

$this->title = $model->GiftCardHistoryId;
$this->params['breadcrumbs'][] = ['label' => 'Giftcardhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcardhistories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GiftCardHistoryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GiftCardHistoryId], [
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
            'GiftCardHistoryId',
            'GiftCardID',
            'CustomerID',
            'OrderID',
            'BasketAmount',
            'GiftCardAmount',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
