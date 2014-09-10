<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Customers */

$this->title = 'Update Customers: ' . ' ' . $model->CustomerId;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CustomerId, 'url' => ['view', 'id' => $model->CustomerId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
