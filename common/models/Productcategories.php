<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productcategories".
 *
 * @property integer $ProductCategoryId
 * @property integer $ParentProductCategoryId
 * @property string $Name
 * @property string $Description
 * @property string $ShortDescription
 * @property string $HtmlDecription
 * @property string $AvatarUrl
 * @property string $IconUrl
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Products[] $products
 */
class Productcategories extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productcategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ParentProductCategoryId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Description', 'HtmlDecription', 'Comment'], 'string'],
            [['Name'], 'string', 'max' => 1000],
            [['ShortDescription'], 'string', 'max' => 2000],
            [['AvatarUrl', 'IconUrl'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductCategoryId' => 'Product Category ID',
            'ParentProductCategoryId' => 'Parent Product Category ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'ShortDescription' => 'Short Description',
            'HtmlDecription' => 'Html Decription',
            'AvatarUrl' => 'Avatar Url',
            'IconUrl' => 'Icon Url',
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
        return $this->hasMany(Products::className(), ['ProductCategoryId' => 'ProductCategoryId']);
    }
}
