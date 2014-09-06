<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productoptions */

$this->title = 'Update Productoptions: ' . ' ' . $model->ProductOptionId;
$this->params['breadcrumbs'][] = ['label' => 'Productoptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductOptionId, 'url' => ['view', 'id' => $model->ProductOptionId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productoptions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
