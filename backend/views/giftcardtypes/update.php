<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcardtypes */

$this->title = 'Update Giftcardtypes: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Giftcardtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->GiftCardTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giftcardtypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
