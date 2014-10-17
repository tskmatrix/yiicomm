<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Orders;

/**
 * SearchOrders represents the model behind the search form about `common\models\Orders`.
 */
class SearchOrders extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderId', 'CustomerId', 'CampaignId', 'PaymentId', 'OrderStatusId', 'InvoicedOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['CustomerNote', 'InvoiceAddressText', 'InvoicePerson', 'InvoiceTaxNumber', 'InvoiceTaxOffice', 'Comment'], 'safe'],
            [['PaidAmount', 'TotalDiscountAmount', 'TaxAmount'], 'number'],
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
        $query = Orders::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'OrderId' => $this->OrderId,
            'CustomerId' => $this->CustomerId,
            'CampaignId' => $this->CampaignId,
            'PaymentId' => $this->PaymentId,
            'OrderStatusId' => $this->OrderStatusId,
            'InvoicedOn' => $this->InvoicedOn,
            'PaidAmount' => $this->PaidAmount,
            'TotalDiscountAmount' => $this->TotalDiscountAmount,
            'TaxAmount' => $this->TaxAmount,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'CustomerNote', $this->CustomerNote])
            ->andFilterWhere(['like', 'InvoiceAddressText', $this->InvoiceAddressText])
            ->andFilterWhere(['like', 'InvoicePerson', $this->InvoicePerson])
            ->andFilterWhere(['like', 'InvoiceTaxNumber', $this->InvoiceTaxNumber])
            ->andFilterWhere(['like', 'InvoiceTaxOffice', $this->InvoiceTaxOffice])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
