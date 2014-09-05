<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Productmedias */

$this->title = $model->ProductMediaId;
$this->params['breadcrumbs'][] = ['label' => 'Productmedias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmedias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductMediaId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductMediaId], [
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
            'ProductMediaId',
            'ProductId',
            'SmallImageUrl:url',
            'ImageUrl:url',
            'ZoomImageUrl:url',
            'EmbedCode:ntext',
            'HtmlAlt',
            'HtmlTitle',
            'FeaturedText',
            'DisplayOrder',
            'IsVideo:boolean',
            'IsPrimary:boolean',
            'IsActive:boolean',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'updated_at',
            'created_at',
            'deleted_at',
        ],
    ]) ?>

</div>
