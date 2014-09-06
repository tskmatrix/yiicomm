<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productoptions */

$this->title = 'Create Productoptions';
$this->params['breadcrumbs'][] = ['label' => 'Productoptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productoptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
