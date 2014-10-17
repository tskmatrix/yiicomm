<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Orderstatuses */

$this->title = 'Update Orderstatuses: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Orderstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->OrderStatusId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orderstatuses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
