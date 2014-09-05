<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producttypes".
 *
 * @property integer $ProductTypeId
 * @property integer $ProductCategoryId
 * @property string $Name
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Products[] $products
 */
class Producttypes extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producttypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductCategoryId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string'],
            [['Name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductTypeId' => 'Product Type ID',
            'ProductCategoryId' => 'Product Category ID',
            'Name' => 'Name',
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
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['ProductTypeId' => 'ProductTypeId']);
    }
}
