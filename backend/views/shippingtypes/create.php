<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Shippingtypes */

$this->title = 'Create Shippingtypes';
$this->params['breadcrumbs'][] = ['label' => 'Shippingtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shippingtypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
