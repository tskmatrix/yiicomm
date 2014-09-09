<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * SearchProducts represents the model behind the search form about `common\models\Products`.
 */
class SearchProducts extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'ProductCategoryId', 'SupplierId', 'BrandId', 'ProductTypeId', 'DiscountPercent', 'CommissionPercent', 'MaximumPurchaseCount', 'VoteCount', 'created_by', 'LastUpdatedBy', 'PublishedOn', 'updated_at', 'created_at', 'deleted_at'], 'integer'],
            [['Gender', 'Name', 'SupplierDescription', 'Description', 'ShortDescription', 'HtmlDescription', 'UrlName', 'Comment'], 'safe'],
            [['TaxPercent', 'Price', 'PriceMarket', 'PriceSupplier'], 'number'],
            [['IsActive', 'IsFeatured', 'IsOnVote'], 'boolean'],
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
        $query = Products::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProductId' => $this->ProductId,
            'ProductCategoryId' => $this->ProductCategoryId,
            'SupplierId' => $this->SupplierId,
            'BrandId' => $this->BrandId,
            'ProductTypeId' => $this->ProductTypeId,
            'DiscountPercent' => $this->DiscountPercent,
            'CommissionPercent' => $this->CommissionPercent,
            'TaxPercent' => $this->TaxPercent,
            'Price' => $this->Price,
            'PriceMarket' => $this->PriceMarket,
            'PriceSupplier' => $this->PriceSupplier,
            'MaximumPurchaseCount' => $this->MaximumPurchaseCount,
            'IsActive' => $this->IsActive,
            'IsFeatured' => $this->IsFeatured,
            'IsOnVote' => $this->IsOnVote,
            'VoteCount' => $this->VoteCount,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'PublishedOn' => $this->PublishedOn,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'SupplierDescription', $this->SupplierDescription])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'ShortDescription', $this->ShortDescription])
            ->andFilterWhere(['like', 'HtmlDescription', $this->HtmlDescription])
            ->andFilterWhere(['like', 'UrlName', $this->UrlName])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
