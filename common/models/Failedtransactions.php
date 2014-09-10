<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "failedtransactions".
 *
 * @property integer $FailedTransactionId
 * @property integer $OrderId
 */
class Failedtransactions extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'failedtransactions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FailedTransactionId', 'OrderId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FailedTransactionId' => 'Failed Transaction ID',
            'OrderId' => 'Order ID',
        ];
    }
}
