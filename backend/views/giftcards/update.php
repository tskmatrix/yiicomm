<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcards */

$this->title = 'Update Giftcards: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Giftcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->GiftCardId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giftcards-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
