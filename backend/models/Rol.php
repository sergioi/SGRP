<?php

namespace backend\models;

use common\models\User;


use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property int $id
 * @property string $rol_nombre
 * @property int $rol_valor
 *
 * @property User[] $users
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rol_nombre', 'rol_valor'], 'required'],
            [['rol_valor'], 'integer'],
            [['rol_nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rol_nombre' => 'Rol Nombre',
            'rol_valor' => 'Rol Valor',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['rol_id' => 'id']);
    }


    
}
