<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "genero".
 *
 * @property int $id
 * @property string $genero_nombre
 *
 * @property Perfil[] $perfils
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genero_nombre'], 'required'],
            [['genero_nombre'], 'string', 'max' => 45],
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

    /**
     * Gets query for [[Perfils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerfils()
    {
        return $this->hasMany(Perfil::class, ['genero_id' => 'id']);
    }

    /**
     * Gets query for [[Etapa1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEtapa1()
    {
        return $this->hasMany(Etapa1::className(), ['sexo' => 'id']);
    }
}
