<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\stockunits */

$this->title = 'Update Stockunits: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Stockunits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->StockUnitId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stockunits-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
