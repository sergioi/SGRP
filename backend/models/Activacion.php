<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "activacion".
 *
 * @property int $id
 * @property string $activacion1
 * @property string $activacion2
 * @property string $activacion3
 * @property string $activacion33
 */
class Activacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activacion1', 'activacion2', 'activacion3', 'activacion33'], 'required'],
            [['activacion1', 'activacion2', 'activacion3', 'activacion33'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activacion1' => 'Activar Etapa 1 (Datos generales)',
            'activacion2' => 'Activar Etapa 2 (Datos de la empresa)',
            'activacion3' => 'Activar Etapa 3 (carga de los anexos (I y IV))',
            'activacion33' => 'Activar Etapa 4 (mostrar lista de resultados)',
        ];
    }
}
