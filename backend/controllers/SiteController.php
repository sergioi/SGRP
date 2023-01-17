<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use common\models\PermisosHelpers;

use yii\helpers\Html;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','download'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index','download'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                        return PermisosHelpers::requerirMinimoRol('Admin')
                        && PermisosHelpers::requerirEstado('Activo');
                        }
                        ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->loginAdmin()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
//----------------------------------------------------------------

    private function downloadFile($dir, $file, $extensions=[])
    {
     //Si el directorio existe
     if (is_dir($dir))
     {
      //Ruta absoluta del archivo
      $path = $dir.$file;
      
      //Si el archivo existe
      if (is_file($path))
      {
       //Obtener información del archivo
       $file_info = pathinfo($path);
       //Obtener la extensión del archivo
       $extension = $file_info["extension"];
       
       if (is_array($extensions))
       {
        //Si el argumento $extensions es un array
        //Comprobar las extensiones permitidas
        foreach($extensions as $e)
        {
         //Si la extension es correcta
         if ($e === $extension)
         {
          //Procedemos a descargar el archivo
          // Definir headers
          $size = filesize($path);
          header("Content-Type: application/force-download");
          header("Content-Disposition: attachment; filename=$file");
          header("Content-Transfer-Encoding: binary");
          header("Content-Length: " . $size);
          // Descargar archivo
          readfile($path);
          //Correcto
          return true;
         }
        }
       }
       
      }
     }
     //Ha ocurrido un error al descargar el archivo
     return false;
    }
    
    public function actionDownload()
    {
     if (Yii::$app->request->get("file"))
     {
      //Si el archivo no se ha podido descargar
      //downloadFile($dir, $file, $extensions=[])
      if (!$this->downloadFile("../Anexo_I/", Html::encode($_GET["file"]), ["pdf", "txt", "docx"]))
      {
       //Mensaje flash para mostrar el error
       Yii::$app->session->setFlash("errordownload");
      }
     }
     
     return $this->render("download");
    }
}
