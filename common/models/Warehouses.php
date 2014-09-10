<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "warehouses".
 *
 * @property integer $WarehouseId
 * @property string $Name
 * @property string $Description
 * @property string $FullAddress
 * @property boolean $IsActive
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Warehouses extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warehouses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description', 'FullAddress', 'Comment'], 'string'],
            [['IsActive'], 'boolean'],
            [['created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'WarehouseId' => 'Warehouse ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'FullAddress' => 'Full Address',
            'IsActive' => 'Is Active',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
