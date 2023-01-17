<?php

namespace backend\models;

use Yii;


use yii\helpers\ArrayHelper; 
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
            'nombre_maestro' => 'Nombre Maestro',
        ];
    }
    public function getEtapa4()
    {
        return $this->hasMany(Etapa4::class, ['nombre_maestro' => 'id']);
    }

    public function getMaestroLista()
    {
        return $this->hasMany(Etapa4::class, ['nombre_maestro' => 'id']);
    }


    
}
