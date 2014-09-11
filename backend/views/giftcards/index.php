<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchGiftcards */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Giftcards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcards-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Giftcards', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GiftCardId',
            'GiftCardTypeId',
            'Name',
            'Description:ntext',
            'GiftCardCode',
            // 'SenderCustomerId',
            // 'SenderName',
            // 'SenderPhone',
            // 'SenderEmail:email',
            // 'SenderMessage:ntext',
            // 'RecipientCustomerId',
            // 'RecipientName',
            // 'RecipientPhone',
            // 'RecipientEmail:email',
            // 'StartedOn',
            // 'EndedOn',
            // 'IsActive:boolean',
            // 'IsNotified:boolean',
            // 'IsLimited:boolean',
            // 'MinimumBasketAmount',
            // 'MinimumBasketItemCount',
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
