<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "productoptiongroups".
 *
 * @property integer $ProductOptionGroupId
 * @property string $Name
 * @property integer $DisplayOrder
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Productoptiongroupmembers[] $productoptiongroupmembers
 */
class Productoptiongroups extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoptiongroups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DisplayOrder', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string'],
            [['Name'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductOptionGroupId' => 'Product Option Group ID',
            'Name' => 'Name',
            'DisplayOrder' => 'Display Order',
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
    public function getProductoptiongroupmembers()
    {
        return $this->hasMany(Productoptiongroupmembers::className(), ['ProductOptionGroupId' => 'ProductOptionGroupId']);
    }
}
