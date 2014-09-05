<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productcategories */

$this->title = 'Create Productcategories';
$this->params['breadcrumbs'][] = ['label' => 'Productcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productcategories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
