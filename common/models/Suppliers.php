<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suppliers".
 *
 * @property integer $SupplierId
 * @property string $Name
 * @property string $ShortName
 * @property string $Description
 * @property string $Website
 * @property string $LogoUrl
 * @property string $TaxOffice
 * @property string $TaxNumber
 * @property string $PrimaryPhone
 * @property string $PrimaryEmail
 * @property string $PrimaryPersonName
 * @property integer $PrimaryPersonId
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Suppliersbrands[] $suppliersbrands
 * @property Supplierspeople[] $supplierspeoples
 */
class Suppliers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suppliers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description', 'Comment'], 'string'],
            [['PrimaryPersonId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name', 'Website'], 'string', 'max' => 500],
            [['ShortName', 'PrimaryPersonName'], 'string', 'max' => 100],
            [['LogoUrl', 'TaxOffice', 'TaxNumber'], 'string', 'max' => 1000],
            [['PrimaryPhone'], 'string', 'max' => 10],
            [['PrimaryEmail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SupplierId' => 'Supplier ID',
            'Name' => 'Name',
            'ShortName' => 'Short Name',
            'Description' => 'Description',
            'Website' => 'Website',
            'LogoUrl' => 'Logo Url',
            'TaxOffice' => 'Tax Office',
            'TaxNumber' => 'Tax Number',
            'PrimaryPhone' => 'Primary Phone',
            'PrimaryEmail' => 'Primary Email',
            'PrimaryPersonName' => 'Primary Person Name',
            'PrimaryPersonId' => 'Primary Person ID',
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
        return $this->hasMany(Suppliersbrands::className(), ['SupplierId' => 'SupplierId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierspeoples()
    {
        return $this->hasMany(Supplierspeople::className(), ['SupplierId' => 'SupplierId']);
    }
}
