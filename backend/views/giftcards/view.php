<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcards */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Giftcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcards-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GiftCardId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GiftCardId], [
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
            'GiftCardId',
            'GiftCardTypeId',
            'Name',
            'Description:ntext',
            'GiftCardCode',
            'SenderCustomerId',
            'SenderName',
            'SenderPhone',
            'SenderEmail:email',
            'SenderMessage:ntext',
            'RecipientCustomerId',
            'RecipientName',
            'RecipientPhone',
            'RecipientEmail:email',
            'StartedOn',
            'EndedOn',
            'IsActive:boolean',
            'IsNotified:boolean',
            'IsLimited:boolean',
            'MinimumBasketAmount',
            'MinimumBasketItemCount',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
