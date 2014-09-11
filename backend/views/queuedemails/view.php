<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Queuedemails */

$this->title = $model->QueuedEmailID;
$this->params['breadcrumbs'][] = ['label' => 'Queuedemails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queuedemails-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->QueuedEmailID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->QueuedEmailID], [
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
            'QueuedEmailID:email',
            'CustomerId',
            'SendingTo',
            'ToName',
            'Priority',
            'SendingFrom',
            'FromName',
            'Cc',
            'Bcc',
            'Subject',
            'Body:ntext',
            'SendTries',
            'SentOn',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
