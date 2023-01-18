<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "desicion".
 *
 * @property int $id
 * @property string $opcion
 */
class Desicion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'desicion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opcion'], 'required'],
            [['opcion'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'opcion' => 'Opcion',
            'opcion2' => 'apoco',
        ];
    }

    public function getEtapa1()
    {
        return $this->hasMany(Etapa1::class, ['padeceDisc' => 'id']);
        
    }
    
}
