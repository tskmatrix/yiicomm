<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productsrelated */

$this->title = 'Update Productsrelated: ' . ' ' . $model->ProductsRelatedId;
$this->params['breadcrumbs'][] = ['label' => 'Productsrelateds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductsRelatedId, 'url' => ['view', 'id' => $model->ProductsRelatedId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productsrelated-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
