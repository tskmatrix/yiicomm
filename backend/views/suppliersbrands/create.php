<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Suppliersbrands */

$this->title = 'Create Suppliersbrands';
$this->params['breadcrumbs'][] = ['label' => 'Suppliersbrands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliersbrands-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
