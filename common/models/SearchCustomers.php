<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Customers;

/**
 * SearchCustomers represents the model behind the search form about `common\models\Customers`.
 */
class SearchCustomers extends Customers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerId', 'UserId', 'RefererCustomerId', 'LastInvoiceAddressId', 'LastShippingAddressId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['IsMallingActive'], 'boolean'],
            [['VirtualMoney'], 'number'],
            [['AffiliateSlug', 'LastCreditCardName', 'Comment'], 'safe'],
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
        $query = Customers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'CustomerId' => $this->CustomerId,
            'UserId' => $this->UserId,
            'IsMallingActive' => $this->IsMallingActive,
            'VirtualMoney' => $this->VirtualMoney,
            'RefererCustomerId' => $this->RefererCustomerId,
            'LastInvoiceAddressId' => $this->LastInvoiceAddressId,
            'LastShippingAddressId' => $this->LastShippingAddressId,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'AffiliateSlug', $this->AffiliateSlug])
            ->andFilterWhere(['like', 'LastCreditCardName', $this->LastCreditCardName])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
