<?php
namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Perfil;

class PerfilSearch extends Perfil
{
    public $generoNombre;
    public $genero_id;
    public $userId;


    public function rules()
    {
        return [

            [['id', 'genero_id'], 'integer'],
            [['nombre', 'apellido', 'fecha_nacimiento', 'generoNombre','userId'], 'safe'],

        ];
    }

    /**
     * @inheritdoc
     */

    public function attributeLabels()
    {
        return [
            'genero_id' => 'Genero',
        ];
    }

    public function search($params)
    {
        $query = Perfil::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'id',
                'nombre',
                'apellido',
                'fecha_nacimiento',
                'generoNombre' => [
                    'asc' => ['genero.genero_nombre' => SORT_ASC],
                    'desc' => ['genero.genero_nombre' => SORT_DESC],
                    'label' => 'Genero'
                ],
                'perfilIdLink' => [
                    'asc' => ['perfil.id' => SORT_ASC],
                    'desc' => ['perfil.id' => SORT_DESC],
                    'label' => 'ID'
                ],
                'userLink' => [
                    'asc' => ['user.username' => SORT_ASC],
                    'desc' => ['user.username' => SORT_DESC],
                    'label' => 'User'
                ],
            ]
        ]);

        if (!($this->load($params) && $this->validate())) {

            $query->joinWith(['genero'])
                ->joinWith(['user']);

            return $dataProvider;
        }

        $this->addSearchParameter($query, 'id');
        $this->addSearchParameter($query, 'nombre', true);
        $this->addSearchParameter($query, 'apellido', true);
        $this->addSearchParameter($query, 'fecha_nacimiento');
        $this->addSearchParameter($query, 'genero_id');
        $this->addSearchParameter($query, 'created_at');
        $this->addSearchParameter($query, 'updated_at');
        $this->addSearchParameter($query, 'user_id');

// filter by genero nombre

        $query->joinWith(['genero' => function ($q) {

            $q->andFilterWhere(['=', 'genero.genero_nombre', $this->generoNombre]);

        }])

// filtrar por usuario

            ->joinWith(['user' => function ($q) {

                $q->andFilterWhere(['=', 'user.id', $this->user]);

            }]);

        return $dataProvider;
    }

    protected function addSearchParameter($query, $attribute, $partialMatch = false)
    {
        if (($pos = strrpos($attribute, '.')) !== false) {
            $modelAttribute = substr($attribute, $pos + 1);
        } else {
            $modelAttribute = $attribute;
        }

        $value = $this->$modelAttribute;
        if (trim($value) === '') {
            return;
        }

        /*
         * La siguiente línea se agrega para un correcto uso de alias
         * de columnas para que el filtrado funcione en el self join
         */

        $attribute = "perfil.$attribute";

        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
    }

}