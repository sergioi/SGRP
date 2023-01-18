<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ingenierias".
 *
 * @property int $id
 * @property string $nombre_carrera
 */
class Ingenierias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingenierias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_carrera'], 'required'],
            [['nombre_carrera'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            
        ];
    }

    public function getEtapa1()
    {
        return $this->hasMany(Etapa1::class, ['ingenierias' => 'id']);
    }
   
}
