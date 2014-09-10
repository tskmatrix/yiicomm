<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Userrestdata */

$this->title = 'Create Userrestdata';
$this->params['breadcrumbs'][] = ['label' => 'Userrestdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userrestdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
