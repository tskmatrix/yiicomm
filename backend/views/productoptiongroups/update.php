<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productoptiongroups */

$this->title = 'Update Productoptiongroups: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productoptiongroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ProductOptionGroupId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productoptiongroups-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
