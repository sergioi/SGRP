<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Etapa2;

/**
 * Etapa2Search represents the model behind the search form of `frontend\models\Etapa2`.
 */
class Etapa2Search extends Etapa2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['NombreProyecto', 'Empresa', 'UbicacionEmpresa', 'AsesorExterno', 'asesorInterno', 'ModalidadDeTitulacion', 'created_at', 'update_at'], 'safe'],
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
        $query = Etapa2::find();

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
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'NombreProyecto', $this->NombreProyecto])
            ->andFilterWhere(['like', 'Empresa', $this->Empresa])
            ->andFilterWhere(['like', 'UbicacionEmpresa', $this->UbicacionEmpresa])
            ->andFilterWhere(['like', 'AsesorExterno', $this->AsesorExterno])
            ->andFilterWhere(['like', 'asesorInterno', $this->asesorInterno])
            ->andFilterWhere(['like', 'ModalidadDeTitulacion', $this->ModalidadDeTitulacion]);

        return $dataProvider;
    }
}
