<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "suppliersbrands".
 *
 * @property integer $SuppliersBrandId
 * @property integer $BrandId
 * @property integer $SupplierId
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property string $updated_at
 * @property integer $deleted_at
 *
 * @property Suppliers $supplier
 * @property Brands $brand
 */
class Suppliersbrands extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suppliersbrands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['BrandId', 'SupplierId', 'created_by', 'LastUpdatedBy', 'created_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string'],
            [['created_at'], 'required'],
            [['updated_at'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SuppliersBrandId' => 'Suppliers Brand ID',
            'BrandId' => 'Brand ID',
            'SupplierId' => 'Supplier ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brands::className(), ['BrandId' => 'BrandId']);
    }
}
