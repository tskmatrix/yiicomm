<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productvotehistories".
 *
 * @property integer $ProductVoteHistoryId
 * @property integer $CustomerId
 * @property integer $ProductId
 * @property string $Message
 * @property boolean $IsLiked
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Products $product
 */
class Productvotehistories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productvotehistories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerId', 'ProductId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Message', 'Comment'], 'string'],
            [['IsLiked'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductVoteHistoryId' => 'Product Vote History ID',
            'CustomerId' => 'Customer ID',
            'ProductId' => 'Product ID',
            'Message' => 'Message',
            'IsLiked' => 'Is Liked',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductId' => 'ProductId']);
    }
}
