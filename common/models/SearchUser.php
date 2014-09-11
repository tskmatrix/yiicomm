<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * SearchUser represents the model behind the search form about `common\models\User`.
 */
class SearchUser extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'UserTypeId', 'Birthday', 'role', 'status', 'lastLogin', 'previousLogin', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'Names', 'PreferredName', 'Surname', 'Gender', 'Website', 'FacebookId', 'TwitterId', 'IsLikedFanPage', 'PhotoUrl', 'IsPersonal', 'IdentityNumber', 'TaxNumber', 'TaxOffice', 'Comment'], 'safe'],
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
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'UserTypeId' => $this->UserTypeId,
            'Birthday' => $this->Birthday,
            'role' => $this->role,
            'status' => $this->status,
            'lastLogin' => $this->lastLogin,
            'previousLogin' => $this->previousLogin,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'Names', $this->Names])
            ->andFilterWhere(['like', 'PreferredName', $this->PreferredName])
            ->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Website', $this->Website])
            ->andFilterWhere(['like', 'FacebookId', $this->FacebookId])
            ->andFilterWhere(['like', 'TwitterId', $this->TwitterId])
            ->andFilterWhere(['like', 'IsLikedFanPage', $this->IsLikedFanPage])
            ->andFilterWhere(['like', 'PhotoUrl', $this->PhotoUrl])
            ->andFilterWhere(['like', 'IsPersonal', $this->IsPersonal])
            ->andFilterWhere(['like', 'IdentityNumber', $this->IdentityNumber])
            ->andFilterWhere(['like', 'TaxNumber', $this->TaxNumber])
            ->andFilterWhere(['like', 'TaxOffice', $this->TaxOffice])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
