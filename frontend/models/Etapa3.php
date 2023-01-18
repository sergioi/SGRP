<?php

namespace frontend\models;

use Yii;

use yii\db\ActiveRecord;
use yii\db\Expression;

use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\User;


/**
 * This is the model class for table "etapa_3".
 *
 * @property int $id
 * @property int $user_id
 * @property string $anexo1
 * @property string|null $created_at
 * @property string|null $update_at
 */
class Etapa3 extends \yii\db\ActiveRecord
{

    public $archivo;
 

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etapa_3';
    }
    public function behaviors()
    {
        return [
            'timestamp' => [
            'class' => 'yii\behaviors\TimestampBehavior',
            'attributes' => [
                                ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'update_at'],
                                ActiveRecord::EVENT_BEFORE_UPDATE => ['update_at'],
                            ],
            'value' => new Expression('NOW()'),
                           ],
               ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            
            [['archivo'], 'file',  'extensions'=>'docx,pdf'] ,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'anexo1' => 'Anexo I',
            'archivo' => '',
            'created_at' => 'Creado:',
            'update_at' => 'Actualizado:',

            'username' => Yii::t('app', 'User'),
        ];
    }


   
    public function getUser()
{
    return $this->hasOne(User::className(), ['id' => 'user_id']);
}

/**
 * @get Username
 */
public function getUsername()
{
    return $this->user->username;
}
/**
 * @getUserId
 */
public function getUserId()
{
    return $this->user ? $this->user->id : 'none';
}
}
