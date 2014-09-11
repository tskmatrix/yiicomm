<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Userrestdata */

$this->title = 'Update Userrestdata: ' . ' ' . $model->UserDetailId;
$this->params['breadcrumbs'][] = ['label' => 'Userrestdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UserDetailId, 'url' => ['view', 'id' => $model->UserDetailId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userrestdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
