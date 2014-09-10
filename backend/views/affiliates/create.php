<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Affiliates */

$this->title = 'Create Affiliates';
$this->params['breadcrumbs'][] = ['label' => 'Affiliates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="affiliates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
