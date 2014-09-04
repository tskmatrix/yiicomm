<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productmedias".
 *
 * @property integer $ProductMediaId
 * @property integer $ProductId
 * @property string $SmallImageUrl
 * @property string $ImageUrl
 * @property string $ZoomImageUrl
 * @property string $EmbedCode
 * @property string $HtmlAlt
 * @property string $HtmlTitle
 * @property string $FeaturedText
 * @property integer $DisplayOrder
 * @property boolean $IsVideo
 * @property boolean $IsPrimary
 * @property boolean $IsActive
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $updated_at
 * @property integer $created_at
 * @property integer $deleted_at
 *
 * @property Products $product
 */
class Productmedias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productmedias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'DisplayOrder', 'created_by', 'LastUpdatedBy', 'updated_at', 'created_at', 'deleted_at'], 'integer'],
            [['EmbedCode', 'Comment'], 'string'],
            [['IsVideo', 'IsPrimary', 'IsActive'], 'boolean'],
            [['SmallImageUrl', 'ImageUrl', 'ZoomImageUrl'], 'string', 'max' => 1000],
            [['HtmlAlt', 'HtmlTitle'], 'string', 'max' => 100],
            [['FeaturedText'], 'string', 'max' => 2000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductMediaId' => 'Product Media ID',
            'ProductId' => 'Product ID',
            'SmallImageUrl' => 'Small Image Url',
            'ImageUrl' => 'Image Url',
            'ZoomImageUrl' => 'Zoom Image Url',
            'EmbedCode' => 'Embed Code',
            'HtmlAlt' => 'Html Alt',
            'HtmlTitle' => 'Html Title',
            'FeaturedText' => 'Featured Text',
            'DisplayOrder' => 'Display Order',
            'IsVideo' => 'Is Video',
            'IsPrimary' => 'Is Primary',
            'IsActive' => 'Is Active',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
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
