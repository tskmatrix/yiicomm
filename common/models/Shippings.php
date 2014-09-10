<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "shippings".
 *
 * @property integer $ShippingId
 * @property integer $OrderId
 * @property integer $OrderDetailId
 * @property string $ShippingAddressText
 * @property string $ShippingPerson
 * @property string $ShippingNumber
 * @property integer $ShippingTypeId
 * @property integer $ShippingStatusId
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Orders $order
 * @property Shippingstatuses $shippingStatus
 * @property Shippingtypes $shippingType
 */
class Shippings extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shippings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderId', 'OrderDetailId', 'ShippingTypeId', 'ShippingStatusId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['ShippingAddressText', 'Comment'], 'string'],
            [['ShippingPerson'], 'string', 'max' => 500],
            [['ShippingNumber'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ShippingId' => 'Shipping ID',
            'OrderId' => 'Order ID',
            'OrderDetailId' => 'Order Detail ID',
            'ShippingAddressText' => 'Shipping Address Text',
            'ShippingPerson' => 'Shipping Person',
            'ShippingNumber' => 'Shipping Number',
            'ShippingTypeId' => 'Shipping Type ID',
            'ShippingStatusId' => 'Shipping Status ID',
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
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['OrderId' => 'OrderId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShippingStatus()
    {
        return $this->hasOne(Shippingstatuses::className(), ['ShippingStatusId' => 'ShippingStatusId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShippingType()
    {
        return $this->hasOne(Shippingtypes::className(), ['ShippingTypeId' => 'ShippingTypeId']);
    }
}
