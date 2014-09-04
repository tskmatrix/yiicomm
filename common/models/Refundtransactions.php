<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "refundtransactions".
 *
 * @property integer $RefundTransactionId
 * @property integer $OrderId
 */
class Refundtransactions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'refundtransactions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RefundTransactionId', 'OrderId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RefundTransactionId' => 'Refund Transaction ID',
            'OrderId' => 'Order ID',
        ];
    }
}
