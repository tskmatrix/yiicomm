<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shippingstatuses */

$this->title = 'Update Shippingstatuses: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Shippingstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ShippingStatusId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shippingstatuses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
