<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Orderdetails;

/**
 * SearchOrderdetails represents the model behind the search form about `common\models\Orderdetails`.
 */
class SearchOrderdetails extends Orderdetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderDetailId', 'OrderId', 'ProductId', 'Quantity', 'ShippedOn', 'pProductCategoryId', 'pSupplierId', 'pBrandId', 'pProductTypeId', 'pDiscountPercent', 'pCommissionPercent', 'deleted_at', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at'], 'integer'],
            [['Price', 'Amount', 'DiscountedAmount', 'TaxRate', 'TaxAmout', 'pMarketPrice', 'pPriceFromSupplier', 'pTaxPercent'], 'number'],
            [['pGender', 'pName', 'pSupplierDescription', 'pDescription', 'pShortDescription', 'pHtmlDescription', 'pUrlName', 'pBarcode', 'Comment'], 'safe'],
            [['pHasDifferentPriceForOptions'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Orderdetails::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'OrderDetailId' => $this->OrderDetailId,
            'OrderId' => $this->OrderId,
            'ProductId' => $this->ProductId,
            'Quantity' => $this->Quantity,
            'Price' => $this->Price,
            'Amount' => $this->Amount,
            'DiscountedAmount' => $this->DiscountedAmount,
            'TaxRate' => $this->TaxRate,
            'TaxAmout' => $this->TaxAmout,
            'ShippedOn' => $this->ShippedOn,
            'pProductCategoryId' => $this->pProductCategoryId,
            'pSupplierId' => $this->pSupplierId,
            'pBrandId' => $this->pBrandId,
            'pProductTypeId' => $this->pProductTypeId,
            'pMarketPrice' => $this->pMarketPrice,
            'pPriceFromSupplier' => $this->pPriceFromSupplier,
            'pDiscountPercent' => $this->pDiscountPercent,
            'pCommissionPercent' => $this->pCommissionPercent,
            'pTaxPercent' => $this->pTaxPercent,
            'pHasDifferentPriceForOptions' => $this->pHasDifferentPriceForOptions,
            'deleted_at' => $this->deleted_at,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'pGender', $this->pGender])
            ->andFilterWhere(['like', 'pName', $this->pName])
            ->andFilterWhere(['like', 'pSupplierDescription', $this->pSupplierDescription])
            ->andFilterWhere(['like', 'pDescription', $this->pDescription])
            ->andFilterWhere(['like', 'pShortDescription', $this->pShortDescription])
            ->andFilterWhere(['like', 'pHtmlDescription', $this->pHtmlDescription])
            ->andFilterWhere(['like', 'pUrlName', $this->pUrlName])
            ->andFilterWhere(['like', 'pBarcode', $this->pBarcode])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
