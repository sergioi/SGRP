<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Activacion;

/**
 * ActivacionSearch represents the model behind the search form of `backend\models\Activacion`.
 */
class ActivacionSearch extends Activacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['activacion1', 'activacion2', 'activacion3', 'activacion33'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Activacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'activacion1', $this->activacion1])
            ->andFilterWhere(['like', 'activacion2', $this->activacion2])
            ->andFilterWhere(['like', 'activacion3', $this->activacion3])
            ->andFilterWhere(['like', 'activacion33', $this->activacion33]);

        return $dataProvider;
    }
}
