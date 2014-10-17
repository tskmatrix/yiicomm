<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shippings */

$this->title = 'Update Shippings: ' . ' ' . $model->ShippingId;
$this->params['breadcrumbs'][] = ['label' => 'Shippings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ShippingId, 'url' => ['view', 'id' => $model->ShippingId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shippings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
