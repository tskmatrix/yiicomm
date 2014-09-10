<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Queuedemails */

$this->title = 'Update Queuedemails: ' . ' ' . $model->QueuedEmailID;
$this->params['breadcrumbs'][] = ['label' => 'Queuedemails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->QueuedEmailID, 'url' => ['view', 'id' => $model->QueuedEmailID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="queuedemails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
