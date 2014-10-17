<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Orderdetails */

$this->title = 'Update Orderdetails: ' . ' ' . $model->OrderDetailId;
$this->params['breadcrumbs'][] = ['label' => 'Orderdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OrderDetailId, 'url' => ['view', 'id' => $model->OrderDetailId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orderdetails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
