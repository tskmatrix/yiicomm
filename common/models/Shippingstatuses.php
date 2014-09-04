<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shippingstatuses".
 *
 * @property integer $ShippingStatusId
 * @property string $Name
 * @property string $Description
 * @property integer $StatusOrder
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Shippings[] $shippings
 */
class Shippingstatuses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shippingstatuses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'created_at', 'updated_at'], 'required'],
            [['Description', 'Comment'], 'string'],
            [['StatusOrder', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ShippingStatusId' => 'Shipping Status ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'StatusOrder' => 'Status Order',
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
    public function getShippings()
    {
        return $this->hasMany(Shippings::className(), ['ShippingStatusId' => 'ShippingStatusId']);
    }
}
