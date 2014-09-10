<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "affiliates".
 *
 * @property integer $AffiliateId
 * @property integer $CustomerId
 * @property integer $ReferedCustomerId
 * @property integer $ActivatedOn
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Customers $customer
 */
class Affiliates extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'affiliates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerId', 'ReferedCustomerId', 'ActivatedOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AffiliateId' => 'Affiliate ID',
            'CustomerId' => 'Customer ID',
            'ReferedCustomerId' => 'Refered Customer ID',
            'ActivatedOn' => 'Activated On',
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
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['CustomerId' => 'CustomerId']);
    }
}
