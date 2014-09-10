<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Usertypes */

$this->title = 'Create Usertypes';
$this->params['breadcrumbs'][] = ['label' => 'Usertypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usertypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
