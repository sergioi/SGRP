<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Etapa1;

/**
 * Etapa1Search represents the model behind the search form of `frontend\models\Etapa1`.
 */
class Etapa1Search extends Etapa1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'matricula', 'sexo', 'telefono', 'ingenieria', 'padeceDisc', 'hablaLaLengua'], 'integer'],
            [['Nombre', 'cual', 'pereteneceAEtn', 'email', 'created_at', 'updated_at'], 'safe'],
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
        $query = Etapa1::find();

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
            'user_id' => $this->user_id,
            'matricula' => $this->matricula,
            'sexo' => $this->sexo,
            'telefono' => $this->telefono,
            'ingenieria' => $this->ingenieria,
            'padeceDisc' => $this->padeceDisc,
            'hablaLaLengua' => $this->hablaLaLengua,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'cual', $this->cual])
            ->andFilterWhere(['like', 'pereteneceAEtn', $this->pereteneceAEtn])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
