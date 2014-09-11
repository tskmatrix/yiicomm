<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "brands".
 *
 * @property integer $BrandId
 * @property string $Name
 * @property string $Description
 * @property string $Website
 * @property string $LogoUrl
 * @property boolean $IsLogoVisible
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Suppliersbrands[] $suppliersbrands
 */
class Brands extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description', 'Comment'], 'string'],
            [['IsLogoVisible'], 'boolean'],
            [['created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name', 'Website'], 'string', 'max' => 500],
            [['LogoUrl'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BrandId' => 'Brand ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'Website' => 'Website',
            'LogoUrl' => 'Logo Url',
            'IsLogoVisible' => 'Is Logo Visible',
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
    public function getSuppliersbrands()
    {
        return $this->hasMany(Suppliersbrands::className(), ['BrandId' => 'BrandId']);
    }
}
