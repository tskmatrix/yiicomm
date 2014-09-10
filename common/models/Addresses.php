<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "addresses".
 *
 * @property integer $AddressId
 * @property integer $UserId
 * @property integer $SupplierId
 * @property integer $AddressTypeId
 * @property boolean $IsCompany
 * @property string $CompanyName
 * @property string $TaxNumber
 * @property string $TaxOffice
 * @property string $ShippingPerson
 * @property string $ShippingPhone
 * @property string $IdentityNumber
 * @property string $Name
 * @property string $AddressLine1
 * @property string $AddressLine2
 * @property string $District
 * @property string $County
 * @property string $City
 * @property string $GeoZone
 * @property string $Country
 * @property string $PostalCode
 * @property string $FullAddress
 * @property boolean $IsValid
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property User $user
 * @property Addresstypes $addressType
 */
class Addresses extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'SupplierId', 'AddressTypeId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['IsCompany', 'IsValid'], 'boolean'],
            [['FullAddress', 'Comment'], 'string'],
            [['CompanyName', 'TaxOffice'], 'string', 'max' => 500],
            [['TaxNumber', 'Name'], 'string', 'max' => 50],
            [['ShippingPerson'], 'string', 'max' => 100],
            [['ShippingPhone'], 'string', 'max' => 10],
            [['IdentityNumber'], 'string', 'max' => 11],
            [['AddressLine1', 'AddressLine2', 'District', 'County', 'City', 'GeoZone', 'Country'], 'string', 'max' => 1000],
            [['PostalCode'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AddressId' => 'Address ID',
            'UserId' => 'User ID',
            'SupplierId' => 'Supplier ID',
            'AddressTypeId' => 'Address Type ID',
            'IsCompany' => 'Is Company',
            'CompanyName' => 'Company Name',
            'TaxNumber' => 'Tax Number',
            'TaxOffice' => 'Tax Office',
            'ShippingPerson' => 'Shipping Person',
            'ShippingPhone' => 'Shipping Phone',
            'IdentityNumber' => 'Identity Number',
            'Name' => 'Name',
            'AddressLine1' => 'Address Line1',
            'AddressLine2' => 'Address Line2',
            'District' => 'District',
            'County' => 'County',
            'City' => 'City',
            'GeoZone' => 'Geo Zone',
            'Country' => 'Country',
            'PostalCode' => 'Postal Code',
            'FullAddress' => 'Full Address',
            'IsValid' => 'Is Valid',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'UserId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressType()
    {
        return $this->hasOne(Addresstypes::className(), ['AddressTypeId' => 'AddressTypeId']);
    }
}
