<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Suppliersbrands;

/**
 * SearchSuppliersbrands represents the model behind the search form about `common\models\Suppliersbrands`.
 */
class SearchSuppliersbrands extends Suppliersbrands
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SuppliersBrandId', 'BrandId', 'SupplierId', 'created_by', 'LastUpdatedBy', 'created_at', 'deleted_at'], 'integer'],
            [['Comment', 'updated_at'], 'safe'],
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
        $query = Suppliersbrands::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'SuppliersBrandId' => $this->SuppliersBrandId,
            'BrandId' => $this->BrandId,
            'SupplierId' => $this->SupplierId,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Comment', $this->Comment])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
