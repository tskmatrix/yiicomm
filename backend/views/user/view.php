<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'This is a HARD delete. Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'UserTypeId',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'Names',
            'PreferredName',
            'Surname',
            'Gender',
            'Birthday:html',[
				'label'=>'Birthday',
				'value' => date('M d, Y', $model->Birthday)
    		],
            'Website',
            'FacebookId',
            'TwitterId',
            'IsLikedFanPage',
            'PhotoUrl:url',
            'IsPersonal',
            'IdentityNumber',
            'TaxNumber',
            'TaxOffice',
            'Comment:ntext',
            'role',
            'status',
            'lastLogin:html',[
				'label'=>'Last Login',
				'value' => date('M d, Y', $model->lastLogin)
    		],
            'previousLogin:html',[
				'label'=>'Previous Login',
				'value' => date('M d, Y', $model->previousLogin)
    		],
            'created_by',
            'LastUpdatedBy',
            'created_at:html',[
				'label'=>'Created At',
				'value' => date('M d, Y', $model->created_at)
    		],
            'updated_at:html',[
				'label'=>'Updated At',
				'value' => date('M d, Y', $model->updated_at)
    		],
            'deleted_at:html',[
				'label'=>'Deleted At',
				'value' => date('M d, Y', $model->deleted_at)
    		],
        ],
    ]) ?>

</div>
