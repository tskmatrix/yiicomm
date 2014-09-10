<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "productoptions".
 *
 * @property integer $ProductOptionId
 * @property integer $ProductId
 * @property integer $ProductOptionGroupId
 * @property integer $ProductOptionGroupMemberId
 * @property string $Value
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Productoptiongroupmembers $productOptionGroupMember
 * @property Products $product
 */
class Productoptions extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoptions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'ProductOptionGroupId', 'ProductOptionGroupMemberId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Value', 'Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductOptionId' => 'Product Option ID',
            'ProductId' => 'Product ID',
            'ProductOptionGroupId' => 'Product Option Group ID',
            'ProductOptionGroupMemberId' => 'Product Option Group Member ID',
            'Value' => 'Value',
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
    public function getProductOptionGroupMember()
    {
        return $this->hasOne(Productoptiongroupmembers::className(), ['ProductOptionGroupMemberId' => 'ProductOptionGroupMemberId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductId' => 'ProductId']);
    }
}
