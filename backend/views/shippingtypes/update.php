<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shippingtypes */

$this->title = 'Update Shippingtypes: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Shippingtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ShippingTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shippingtypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
