<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Productsrelated;

/**
 * SearchProductsrelated represents the model behind the search form about `app\models\Productsrelated`.
 */
class SearchProductsrelated extends Productsrelated
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductsRelatedId', 'ProductId', 'RelatedProductId1', 'RelatedProductId2', 'RelatedProductId3', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
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
        $query = Productsrelated::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProductsRelatedId' => $this->ProductsRelatedId,
            'ProductId' => $this->ProductId,
            'RelatedProductId1' => $this->RelatedProductId1,
            'RelatedProductId2' => $this->RelatedProductId2,
            'RelatedProductId3' => $this->RelatedProductId3,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        return $dataProvider;
    }
}
