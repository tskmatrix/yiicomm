<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Queuedemails */

$this->title = 'Create Queuedemails';
$this->params['breadcrumbs'][] = ['label' => 'Queuedemails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="queuedemails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
