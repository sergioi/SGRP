<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "etapa_4".
 *
 * @property int $id
 * @property string $user_id
 * @property string $asesor_interno
 * @property string $viable_titu
 * @property string $aprovado_resi
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
            [['observaciones'], 'string'],
            [['user_id'], 'string', 'max' => 8],
            [['asesor_interno'], 'string', 'max' => 250],
            [['viable_titu', 'aprovado_resi'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'user_id' => 'Matricula',
            'asesor_interno' => 'Asesor Interno',
            'viable_titu' => 'Viable para Titulación',
            'aprovado_resi' => 'Aprovado para Residecia',
            'observaciones' => 'Observaciones',
        ];
    }

    public static function getAsesorInterno($id){
        if($user=Maestros::findOne($id))
        return $user->nombre_maestro;
        else return '';
    }
}
