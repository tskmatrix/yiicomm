<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Campaigntypes */

$this->title = 'Create Campaigntypes';
$this->params['breadcrumbs'][] = ['label' => 'Campaigntypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigntypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
