<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "campaignproducts".
 *
 * @property integer $CampaignProductId
 * @property integer $CampaignId
 * @property integer $ProductId
 * @property string $Price
 * @property string $Stock
 * @property integer $StockUnitId
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Campaigns $campaign
 */
class Campaignproducts extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaignproducts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CampaignId', 'ProductId', 'StockUnitId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Price', 'Stock'], 'number'],
            [['Comment'], 'string'],
            [['created_at'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CampaignProductId' => 'Campaign Product ID',
            'CampaignId' => 'Campaign ID',
            'ProductId' => 'Product ID',
            'Price' => 'Price',
            'Stock' => 'Stock',
            'StockUnitId' => 'Stock Unit ID',
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
    public function getCampaign()
    {
        return $this->hasOne(Campaigns::className(), ['CampaignId' => 'CampaignId']);
    }
}
