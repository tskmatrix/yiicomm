<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcardhistories */

$this->title = 'Update Giftcardhistories: ' . ' ' . $model->GiftCardHistoryId;
$this->params['breadcrumbs'][] = ['label' => 'Giftcardhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GiftCardHistoryId, 'url' => ['view', 'id' => $model->GiftCardHistoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giftcardhistories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
