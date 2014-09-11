<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Supplierspeople */

$this->title = 'Update Supplierspeople: ' . ' ' . $model->SuppliersPeopleId;
$this->params['breadcrumbs'][] = ['label' => 'Supplierspeoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SuppliersPeopleId, 'url' => ['view', 'id' => $model->SuppliersPeopleId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplierspeople-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
