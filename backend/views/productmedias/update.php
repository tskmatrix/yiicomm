<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productmedias */

$this->title = 'Update Productmedias: ' . ' ' . $model->ProductMediaId;
$this->params['breadcrumbs'][] = ['label' => 'Productmedias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductMediaId, 'url' => ['view', 'id' => $model->ProductMediaId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productmedias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
