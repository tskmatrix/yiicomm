<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Brands */

$this->title = 'Create Brands';
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brands-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
