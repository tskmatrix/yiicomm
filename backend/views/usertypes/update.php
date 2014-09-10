<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Usertypes */

$this->title = 'Update Usertypes: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Usertypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->UserTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usertypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
