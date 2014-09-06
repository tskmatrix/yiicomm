<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productvotehistories */

$this->title = 'Update Productvotehistories: ' . ' ' . $model->ProductVoteHistoryId;
$this->params['breadcrumbs'][] = ['label' => 'Productvotehistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductVoteHistoryId, 'url' => ['view', 'id' => $model->ProductVoteHistoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productvotehistories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
