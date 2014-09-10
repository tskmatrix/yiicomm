<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "supplierspeople".
 *
 * @property integer $SuppliersPeopleId
 * @property integer $UserId
 * @property integer $SupplierId
 * @property string $Department
 * @property boolean $IsPrimary
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Suppliers $supplier
 */
class Supplierspeople extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplierspeople';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'SupplierId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['IsPrimary'], 'boolean'],
            [['Comment'], 'string'],
            [['Department'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SuppliersPeopleId' => 'Suppliers People ID',
            'UserId' => 'User ID',
            'SupplierId' => 'Supplier ID',
            'Department' => 'Department',
            'IsPrimary' => 'Is Primary',
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
    public function getSupplier()
    {
        return $this->hasOne(Suppliers::className(), ['SupplierId' => 'SupplierId']);
    }
}
