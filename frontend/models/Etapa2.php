<?php

namespace frontend\models;

use Yii;

use yii\db\ActiveRecord;
use common\models\User;
use yii\db\Expression;



use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;


/**
 * This is the model class for table "etapa_2".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $NombreProyecto
 * @property string $Empresa
 * @property string $UbicacionEmpresa
 * @property string $AsesorExterno
 * @property string $asesorInterno
 * @property string $ModalidadDeTitulacion
 * @property string|null $created_at
 * @property string|null $update_at
 */
class Etapa2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etapa_2';
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
            [['user_id'], 'integer'],
            [['NombreProyecto', 'Empresa', 'UbicacionEmpresa', 'AsesorExterno', 'asesorInterno', 'ModalidadDeTitulacion'], 'required'],
            [['NombreProyecto', 'Empresa', 'UbicacionEmpresa', 'AsesorExterno', 'asesorInterno', 'ModalidadDeTitulacion'], 'string'],
            [['created_at', 'update_at'], 'safe'],
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
            'NombreProyecto' => 'Nombre del Proyecto.',
            'Empresa' => 'Nombre de la Empresa.',
            'UbicacionEmpresa' => 'Direción y ubicación  de la Empresa.',
            'AsesorExterno' => 'Asesor Externo.',
            'asesorInterno' => 'Asesor Interno.',
            'ModalidadDeTitulacion' => 'Modalidad De Titulación.',
            'created_at' => 'Creado',
            'update_at' => 'Actualizado',

            'userLink' => Yii::t('app', 'User'),
            'username' => Yii::t('app', 'User'),
        ];
    }


    public function getUserLink()
    {
        $url = Url::to(['user/view', 'id'=>$this->UserId]);
        $opciones = [];
        return Html::a($this->getUserName(), $url, $opciones);
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



/**
* @return \yii\db\ActiveQuery
*/

public function getGeneroNombre()
{
return $this->etapa1->Nombre;
}
}
