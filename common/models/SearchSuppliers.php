<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Suppliers;

/**
 * SearchSuppliers represents the model behind the search form about `common\models\Suppliers`.
 */
class SearchSuppliers extends Suppliers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SupplierId', 'PrimaryPersonId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name', 'ShortName', 'Description', 'Website', 'LogoUrl', 'TaxOffice', 'TaxNumber', 'PrimaryPhone', 'PrimaryEmail', 'PrimaryPersonName', 'Comment'], 'safe'],
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
        $query = Suppliers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'SupplierId' => $this->SupplierId,
            'PrimaryPersonId' => $this->PrimaryPersonId,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'ShortName', $this->ShortName])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Website', $this->Website])
            ->andFilterWhere(['like', 'LogoUrl', $this->LogoUrl])
            ->andFilterWhere(['like', 'TaxOffice', $this->TaxOffice])
            ->andFilterWhere(['like', 'TaxNumber', $this->TaxNumber])
            ->andFilterWhere(['like', 'PrimaryPhone', $this->PrimaryPhone])
            ->andFilterWhere(['like', 'PrimaryEmail', $this->PrimaryEmail])
            ->andFilterWhere(['like', 'PrimaryPersonName', $this->PrimaryPersonName])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
