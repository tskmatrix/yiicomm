<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Campaigntypes */

$this->title = 'Update Campaigntypes: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Campaigntypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->CampaignTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaigntypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
