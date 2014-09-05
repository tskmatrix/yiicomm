<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Producttypes */

$this->title = 'Update Producttypes: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Producttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ProductTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producttypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
