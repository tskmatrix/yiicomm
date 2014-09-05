<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "campaigns".
 *
 * @property integer $CampaignId
 * @property integer $CampaignTypeId
 * @property string $Name
 * @property string $ShortDescription
 * @property string $Description
 * @property string $HtmlDescription
 * @property integer $DiscountPercent
 * @property string $ImageUrl
 * @property integer $OrderLimit
 * @property integer $MaximumProductPurchaceLimit
 * @property integer $MinimumProductPurchaceLimit
 * @property integer $StartedOn
 * @property integer $EndedOn
 * @property integer $ShippingStartsOn
 * @property integer $ShippingEndsOn
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Campaignproducts[] $campaignproducts
 * @property Campaigntypes $campaignType
 */
class Campaigns extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaigns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CampaignTypeId', 'DiscountPercent', 'OrderLimit', 'MaximumProductPurchaceLimit', 'MinimumProductPurchaceLimit', 'StartedOn', 'EndedOn', 'ShippingStartsOn', 'ShippingEndsOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Description', 'Comment'], 'string'],
            [['Name', 'ShortDescription', 'ImageUrl'], 'string', 'max' => 500],
            [['HtmlDescription'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CampaignId' => 'Campaign ID',
            'CampaignTypeId' => 'Campaign Type ID',
            'Name' => 'Name',
            'ShortDescription' => 'Short Description',
            'Description' => 'Description',
            'HtmlDescription' => 'Html Description',
            'DiscountPercent' => 'Discount Percent',
            'ImageUrl' => 'Image Url',
            'OrderLimit' => 'Order Limit',
            'MaximumProductPurchaceLimit' => 'Maximum Product Purchace Limit',
            'MinimumProductPurchaceLimit' => 'Minimum Product Purchace Limit',
            'StartedOn' => 'Started On',
            'EndedOn' => 'Ended On',
            'ShippingStartsOn' => 'Shipping Starts On',
            'ShippingEndsOn' => 'Shipping Ends On',
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
    public function getCampaignproducts()
    {
        return $this->hasMany(Campaignproducts::className(), ['CampaignId' => 'CampaignId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampaignType()
    {
        return $this->hasOne(Campaigntypes::className(), ['CampaignTypeId' => 'CampaignTypeId']);
    }
}
