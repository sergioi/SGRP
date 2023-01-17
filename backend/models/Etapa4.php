<?php

namespace backend\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "etapa_4".
 *
 * @property int $id
 * @property int $user_id
 * @property string $asesor_interno
 * @property int $viable_titu
 * @property int $aprovado_resi
 * @property string $observaciones
 */
class Etapa4 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etapa_4';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'asesor_interno', 'viable_titu', 'aprovado_resi', 'observaciones'], 'required'],
            [['observaciones', 'viable_titu', 'aprovado_resi'], 'string'],
            [['asesor_interno','user_id',], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Matricula del alumno',
            'asesor_interno' => 'Asesor Interno',
            'viable_titu' => 'Viable para titulacion',
            'aprovado_resi' => 'Aprovado para Residencia',
            'observaciones' => 'Observaciones',
        ];
    }

    
    public static function getAsesorInterno($id){
        if($user=Maestros::findOne($id))
        return $user->nombre_maestro;
        else return '';
    }

    public function getMaestros($id)
{
   $maestros = Maestros::findOne($id);
   return $maestros->nombre_maestro;
}


public function getMaestroLista()
{
   $maestros = Maestros::find()->all();
   $maestrosLista = ArrayHelper::map($maestros,'id','nombre_maestro');
   return $maestrosLista;
}

/**
* @return \yii\db\ActiveQuery
*/

public function getIngenieriasNombre()
{
return $this->ingenierias->nombre_carrera;
}
/**
* get lista de generos para lista desplegable
*/

public static function getIngenieriasLista()
{
$droptions = Ingenierias::find()->asArray()->all();
return ArrayHelper::map($droptions, 'id', 'nombre_carrera');
}
}
