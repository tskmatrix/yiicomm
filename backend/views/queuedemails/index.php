<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchQueuedemails */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Queuedemails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queuedemails-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Queuedemails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'QueuedEmailID:email',
            'CustomerId',
            'SendingTo',
            'ToName',
            'Priority',
            // 'SendingFrom',
            // 'FromName',
            // 'Cc',
            // 'Bcc',
            // 'Subject',
            // 'Body:ntext',
            // 'SendTries',
            // 'SentOn',
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
