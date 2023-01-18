<?php

namespace frontend\models;

use Yii;

use yii\db\Expression;

use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\db\ActiveRecord;
use common\models\User;


/**
 * This is the model class for table "etapa_1".
 *
 * @property int $id
 * @property int $user_id
 * @property string $Nombre
 * @property int $matricula
 * @property int $sexo
 * @property int $telefono
 * @property int $ingenieria
 * @property int $padeceDisc
 * @property string $cual
 * @property string $pereteneceAEtn
 * @property int $hablaLaLengua
 * @property string $email
 */
class Etapa1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etapa_1';
    }


    public function behaviors()
    {
        return [
            'timestamp' => [
            'class' => 'yii\behaviors\TimestampBehavior',
            'attributes' => [
                                ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                                ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
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
            [['user_id', 'Nombre', 'matricula', 'sexo', 'telefono', 'ingenieria', 'padeceDisc', 'cual', 'pereteneceAEtn', 'hablaLaLengua', 'email'], 'required'],
            [['user_id', 'matricula', 'sexo', 'ingenieria', 'padeceDisc', 'hablaLaLengua'], 'integer'],
            [['cual', 'pereteneceAEtn'], 'string'],
            [['Nombre'], 'string', 'max' => 250],
           ['telefono', 'number'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique'],
            [[ 'created_at', 'updated_at'], 'safe'],

            [['sexo'],'in', 'range'=>array_keys($this->getGeneroLista())],
            [['sexo'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::class, 'targetAttribute' => ['sexo' => 'id']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [//etiquetas a mostrar si son llamados en el created
            'id' => 'ID',
            'user_id' => 'User ID',
            'Nombre' => 'Nombre Completo',
            'matricula' => 'Matrícula',
            'sexo' => 'Sexo',
            'telefono' => 'Teléfono',
            'ingenieria' => '¿Ingeniería a la que Pertenece?',
            'padeceDisc' => '¿Padeces Alguna Discapacidad?',
            'cual' => '¿Cuál?',
            'pereteneceAEtn' => '¿Perteneces a alguna Etnia?',
            'hablaLaLengua' => '¿Hablas la Lengua de la Etnia?',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            //getGeneneroNombre =>
            'generoNombre' => Yii::t('app', 'Sexo'),
            
            'ingenieriasNombre' => Yii::t('app', 'Ingeniería del alumno'),
            'desicionNombre' => Yii::t('app', '¿Padece discapacidad?'),
            'desicionNombre2' => Yii::t('app', '¿Pertenece a alguna Etnia?'),
            'desicionNombre3' => Yii::t('app', '¿Habla la lengua de la etnia?'),
            'userLink' => Yii::t('app', 'Usuario'),
            
            
        ];
    }

    
    public function getUserLink()
    {
        $url = Url::to(['user/view', 'id'=>$this->UserId]);
        $opciones = [];
        return Html::a($this->getUserName(), $url, $opciones);
    }
    public function getDesicion()
    {
        return $this->hasOne(Desicion::class, ['id' => 'padeceDisc']);
    }
    public function getDesicion2()
    {
        return $this->hasOne(Desicion::class, ['id' => 'pereteneceAEtn']);
    }
    public function getDesicion3()
    {
        return $this->hasOne(Desicion::class, ['id' => 'hablaLaLengua']);
    }


    /**
 * @return \yii\db\ActiveQuery
 */

public function getDesicionNombre()
{
    return $this->desicion->opcion;
}
public function getDesicionNombre2()
{
    return $this->desicion2->opcion;
}
public function getDesicionNombre3()
{
    return $this->desicion3->opcion;
}
/**
 * get lista de generos para lista desplegable
 */

public static function getDesicionLista()
{
    $droptions = Desicion::find()->asArray()->all();
    return ArrayHelper::map($droptions, 'id', 'opcion');
}
//----------------------------------------------------------------
public function getIngenierias()
{
    return $this->hasOne(Ingenierias::class, ['id' => 'ingenieria']);
}


/**
* @return \yii\db\ActiveQuery
*/

public function getIngenieriasNombre()
{
return $this->ingenierias->nombre_carrera;
}
/**
* get lista de generos para lista desplegable
*/

public static function getIngenieriasLista()
{
$droptions = Ingenierias::find()->asArray()->all();
return ArrayHelper::map($droptions, 'id', 'nombre_carrera');
}
//----------------------------------------------------------------
public function getGenero()
{
    return $this->hasOne(Genero::className(), ['id' => 'sexo']);
}


/**
* @return \yii\db\ActiveQuery
*/

public function getGeneroNombre()
{
return $this->genero->genero_nombre;
}
/**
* get lista de generos para lista desplegable
*/

public static function getGeneroLista()
{
$droptions = Genero::find()->asArray()->all();
return ArrayHelper::map($droptions, 'id', 'genero_nombre');
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
