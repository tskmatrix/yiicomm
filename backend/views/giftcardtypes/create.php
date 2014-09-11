<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Giftcardtypes */

$this->title = 'Create Giftcardtypes';
$this->params['breadcrumbs'][] = ['label' => 'Giftcardtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcardtypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
