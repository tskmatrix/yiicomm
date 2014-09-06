<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productpricehistories */

$this->title = 'Update Productpricehistories: ' . ' ' . $model->ProductPriceHistoryId;
$this->params['breadcrumbs'][] = ['label' => 'Productpricehistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductPriceHistoryId, 'url' => ['view', 'id' => $model->ProductPriceHistoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productpricehistories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
