<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "currencies".
 *
 * @property integer $CurrencyId
 * @property string $CurrencyCode
 * @property string $Name
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Paymenttransactions[] $paymenttransactions
 */
class Currencies extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'currencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CurrencyCode', 'Name'], 'required'],
            [['Comment'], 'string'],
            [['created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['CurrencyCode'], 'string', 'max' => 5],
            [['Name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CurrencyId' => 'Currency ID',
            'CurrencyCode' => 'Currency Code',
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
    public function getPaymenttransactions()
    {
        return $this->hasMany(Paymenttransactions::className(), ['CurrencyCode' => 'CurrencyCode']);
    }
}
