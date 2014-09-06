<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Productvotehistories */

$this->title = $model->ProductVoteHistoryId;
$this->params['breadcrumbs'][] = ['label' => 'Productvotehistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productvotehistories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductVoteHistoryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductVoteHistoryId], [
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
            'ProductVoteHistoryId',
            'CustomerId',
            'ProductId',
            'Message:ntext',
            'IsLiked:boolean',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
