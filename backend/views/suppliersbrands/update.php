<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Suppliersbrands */

$this->title = 'Update Suppliersbrands: ' . ' ' . $model->SuppliersBrandId;
$this->params['breadcrumbs'][] = ['label' => 'Suppliersbrands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SuppliersBrandId, 'url' => ['view', 'id' => $model->SuppliersBrandId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suppliersbrands-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
