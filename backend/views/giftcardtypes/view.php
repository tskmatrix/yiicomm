<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcardtypes */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Giftcardtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcardtypes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GiftCardTypeId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GiftCardTypeId], [
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
            'GiftCardTypeId',
            'Name',
            'Description:ntext',
            'Amount',
            'ImageUrl:url',
            'Comment',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
