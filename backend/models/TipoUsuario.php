<?php

namespace backend\models;


use Yii;

use common\models\User;

/**
 * This is the model class for table "tipo_usuario".
 *
 * @property int $id
 * @property string $tipo_usuario_nombre
 * @property int $tipo_usuario_valor
 *
 * @property User[] $users
 */
class TipoUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_usuario_nombre', 'tipo_usuario_valor'], 'required'],
            [['tipo_usuario_valor'], 'integer'],
            [['tipo_usuario_nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_usuario_nombre' => 'Tipo Usuario Nombre',
            'tipo_usuario_valor' => 'Tipo Usuario Valor',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['tipo_usuario_id' => 'id']);
    }
}
