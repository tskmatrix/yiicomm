<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Productcategories */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productcategories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductCategoryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductCategoryId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProductCategoryId',
            'ParentProductCategoryId',
            'Name',
            'Description:ntext',
            'ShortDescription',
            'HtmlDecription:ntext',
            'AvatarUrl:url',
            'IconUrl:url',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
