<?php

namespace frontend\controllers;

use frontend\models\Etapa3;
use frontend\models\search\Etapa3 as Etapa3Search;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;
use frontend\models\Etapa1;
use common\models\PermisosHelpers;
use common\models\RegistrosHelpers;
use yii\web\UploadedFile;

/**
 * Etapa3Controller implements the CRUD actions for Etapa3 model.
 */
class Etapa3Controller extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
       
        return [
            'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'only' => ['index', 'view','create', 'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['index', 'view','create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                            
                    ],
                ],
         
                'access2' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'only' => ['index', 'view','create', 'update', 'delete'],
                    'rules' => [
                        [
                           'actions' => ['index', 'view','create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                            'matchCallback' => function ($rule, $action) {
                                return PermisosHelpers::requerirEstado('Activo')
                                && PermisosHelpers::activaEtapa3('Activo');
                            }
                         ],
                            
                    ],
                       
                ],
                    
            'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                       'delete' => ['post'],
                    ],
                ],
            ];
    }

    /**
     * Lists all Etapa3 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
            return $this->render('view', [
            'model' => $this->findModel($ya_existe),
            ]);
            } else {
            return $this->redirect(['carreras']);
            }
    }

    public function actionCarreras()
    {
            return $this->render('carreras');
            
    }

    /**
     * Displays a single Etapa3 model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {
        $persona = Etapa1::find()->where(['user_id' =>
        Yii::$app->user->identity->id])->one();
      
        
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
           
            return $this->render('view',
             [ 'model' => $this->findModel($ya_existe), ],
            ['persona' => $persona]
            );

            } else {
                
            return $this->redirect(['create']);
            }
    }

    /**
     * Creates a new Etapa3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Etapa3();
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($this->subirArchivo($model)){
              
            
                          
        } else {
                  
            return $this->render('create', [
  
                  'model' => $model,
  
                   ]);
        }
        

        

    }
    public function actionCreate2()
    {
        $model = new Etapa3();
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($this->subirArchivo2($model)){
              
            
                          
        } else {
                  
            return $this->render('create2', [
  
                  'model' => $model,
  
                   ]);
        }
        

        

    }
    public function actionCreate3()
    {
        $model = new Etapa3();
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($this->subirArchivo3($model)){
              
            
                          
        } else {
                  
            return $this->render('create3', [
  
                  'model' => $model,
  
                   ]);
        }
        

        

    }

    public function actionCreate4()
    {
        $model = new Etapa3();
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($this->subirArchivo4($model)){
              
            
                          
        } else {
                  
            return $this->render('create4', [
  
                  'model' => $model,
  
                   ]);
        }
        

        

    }

    public function actionCreate5()
    {
        $model = new Etapa3();
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($this->subirArchivo5($model)){
              
            
                          
        } else {
                  
            return $this->render('create5', [
  
                  'model' => $model,
  
                   ]);
        }
        

        

    }

    public function actionCreate6()
    {
        $model = new Etapa3();
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_3')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($this->subirArchivo6($model)){
              
            
                          
        } else {
                  
            return $this->render('create6', [
  
                  'model' => $model,
  
                   ]);
        }
        

        

    }

    /**
     * Updates an existing Etapa3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
        return $this->redirect(['create']);
    }

    /**
     * Deletes an existing Etapa3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete()
    {
        $model = Etapa3::find()->where([
            'user_id' => Yii::$app->user->identity->id])->one(); 

            if(file_exists($model->anexo1)){
                unlink($model->anexo1);
            }

            $this->findModel($model->id)->delete();
            return $this->redirect(['site/index']);
    }

    /**
     * Finds the Etapa3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Etapa3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Etapa3::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('La p??gina solicitada no existe.');
    }

    protected function subirArchivo(Etapa3 $model){

        if ($model->load(Yii::$app->request->post()) ) {
            
            $model->archivo= UploadedFile::getInstance($model,'archivo');

            if($model->validate()){

                if($model->archivo){

                    if(file_exists($model->anexo1)){
                        unlink($model->anexo1);
                    }
                    $rutaArchivo='Anexo_I/Industrial/'.time()."_".$model->archivo->name.".".$model->archivo;
                    
                    if($model->archivo->saveAs($rutaArchivo)){
                        $model->anexo1=$rutaArchivo;

                    }
                }
            }
            
                

            if($model->save(false)){

                 return $this->redirect(['view']);
            }

           
        }
    }

    protected function subirArchivo2(Etapa3 $model){

        if ($model->load(Yii::$app->request->post()) ) {
            
            $model->archivo= UploadedFile::getInstance($model,'archivo');

            if($model->validate()){

                if($model->archivo){

                    if(file_exists($model->anexo1)){
                        unlink($model->anexo1);
                    }
                    $rutaArchivo='Anexo_I/Sistemas/'.time()."_".$model->archivo->name.".".$model->archivo;
                    
                    if($model->archivo->saveAs($rutaArchivo)){
                        $model->anexo1=$rutaArchivo;

                    }
                }
            }
            
                

            if($model->save(false)){

                 return $this->redirect(['view']);
            }

           
        }
    }

    protected function subirArchivo3(Etapa3 $model){

        if ($model->load(Yii::$app->request->post()) ) {
            
            $model->archivo= UploadedFile::getInstance($model,'archivo');

            if($model->validate()){

                if($model->archivo){

                    if(file_exists($model->anexo1)){
                        unlink($model->anexo1);
                    }
                    $rutaArchivo='Anexo_I/Empresarial/'.time()."_".$model->archivo->name.".".$model->archivo;
                    
                    if($model->archivo->saveAs($rutaArchivo)){
                        $model->anexo1=$rutaArchivo;

                    }
                }
            }
            
                

            if($model->save(false)){

                 return $this->redirect(['view']);
            }

           
        }
    }
    protected function subirArchivo4(Etapa3 $model){

        if ($model->load(Yii::$app->request->post()) ) {
            
            $model->archivo= UploadedFile::getInstance($model,'archivo');

            if($model->validate()){

                if($model->archivo){

                    if(file_exists($model->anexo1)){
                        unlink($model->anexo1);
                    }
                    $rutaArchivo='Anexo_I/Administracion/'.time()."_".$model->archivo->name.".".$model->archivo;
                    
                    if($model->archivo->saveAs($rutaArchivo)){
                        $model->anexo1=$rutaArchivo;

                    }
                }
            }
            
                

            if($model->save(false)){

                 return $this->redirect(['view']);
            }

           
        }
    }
    protected function subirArchivo5(Etapa3 $model){

        if ($model->load(Yii::$app->request->post()) ) {
            
            $model->archivo= UploadedFile::getInstance($model,'archivo');

            if($model->validate()){

                if($model->archivo){

                    if(file_exists($model->anexo1)){
                        unlink($model->anexo1);
                    }
                    $rutaArchivo='Anexo_I/Civil/'.time()."_".$model->archivo->name.".".$model->archivo;
                    
                    if($model->archivo->saveAs($rutaArchivo)){
                        $model->anexo1=$rutaArchivo;

                    }
                }
            }
            
                

            if($model->save(false)){

                 return $this->redirect(['view']);
            }

           
        }
    }
    protected function subirArchivo6(Etapa3 $model){

        if ($model->load(Yii::$app->request->post()) ) {
            
            $model->archivo= UploadedFile::getInstance($model,'archivo');

            if($model->validate()){

                if($model->archivo){

                    if(file_exists($model->anexo1)){
                        unlink($model->anexo1);
                    }
                    $rutaArchivo='Anexo_I/Ambiental/'.time()."_".$model->archivo->name.".".$model->archivo;
                    
                    if($model->archivo->saveAs($rutaArchivo)){
                        $model->anexo1=$rutaArchivo;

                    }
                }
            }
            
                

            if($model->save(false)){

                 return $this->redirect(['view']);
            }

           
        }
    }

        
}
