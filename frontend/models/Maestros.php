<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maestros".
 *
 * @property int $id
 * @property string $nombre_maestro
 */
class Maestros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maestros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_maestro'], 'required'],
            [['nombre_maestro'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_maestro' => 'Nombre Docente',
        ];
    }
}
