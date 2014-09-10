<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Supplierspeople;

/**
 * SearchSupplierspeople represents the model behind the search form about `common\models\Supplierspeople`.
 */
class SearchSupplierspeople extends Supplierspeople
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SuppliersPeopleId', 'UserId', 'SupplierId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Department', 'Comment'], 'safe'],
            [['IsPrimary'], 'boolean'],
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
        $query = Supplierspeople::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'SuppliersPeopleId' => $this->SuppliersPeopleId,
            'UserId' => $this->UserId,
            'SupplierId' => $this->SupplierId,
            'IsPrimary' => $this->IsPrimary,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Department', $this->Department])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
