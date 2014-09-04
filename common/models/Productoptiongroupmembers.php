<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productoptiongroupmembers".
 *
 * @property integer $ProductOptionGroupMemberId
 * @property integer $ProductOptionGroupId
 * @property string $Name
 * @property integer $DisplayOrder
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Productoptiongroups $productOptionGroup
 * @property Productoptionprices[] $productoptionprices
 * @property Productoptions[] $productoptions
 */
class Productoptiongroupmembers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoptiongroupmembers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductOptionGroupId', 'DisplayOrder', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string'],
            [['Name'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductOptionGroupMemberId' => 'Product Option Group Member ID',
            'ProductOptionGroupId' => 'Product Option Group ID',
            'Name' => 'Name',
            'DisplayOrder' => 'Display Order',
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
    public function getProductOptionGroup()
    {
        return $this->hasOne(Productoptiongroups::className(), ['ProductOptionGroupId' => 'ProductOptionGroupId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptionprices()
    {
        return $this->hasMany(Productoptionprices::className(), ['ProductOptionGroupMemberId2' => 'ProductOptionGroupMemberId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions()
    {
        return $this->hasMany(Productoptions::className(), ['ProductOptionGroupMemberId' => 'ProductOptionGroupMemberId']);
    }
}
