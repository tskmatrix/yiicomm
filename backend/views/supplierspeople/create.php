<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Supplierspeople */

$this->title = 'Create Supplierspeople';
$this->params['breadcrumbs'][] = ['label' => 'Supplierspeoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplierspeople-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
