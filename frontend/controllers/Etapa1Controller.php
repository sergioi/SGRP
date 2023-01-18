<?php

namespace frontend\controllers;

use frontend\models\Etapa1;
use frontend\models\search\Etapa1 as Etapa1Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


use Yii;
use common\models\PermisosHelpers;
use common\models\RegistrosHelpers;

/**
 * Etapa1Controller implements the CRUD actions for Etapa1 model.
 */
class Etapa1Controller extends Controller
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
                                && PermisosHelpers::activaEtapa1('Activo');
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
     * Lists all Etapa1 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_1')) {
            return $this->render('view', [
            'model' => $this->findModel($ya_existe),
            ]);
            } else {
            return $this->redirect(['create']);
            }
    }

    /**
     * Displays a single Etapa1 model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_1')) { //cambiar  a etapa_1
           
            return $this->render('view', [
            'model' => $this->findModel($ya_existe),
            ]);

            } else {
                
            return $this->redirect(['create']);
            }
    }

    /**
     * Creates a new Etapa1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Etapa1;
          
        $model->user_id = \Yii::$app->user->identity->id;   //asigna la id de usuario al user_id de la tabla ETapa1  para indetificar su creacion
        $model->email = \Yii::$app->user->identity->email;
        if ($ya_existe = RegistrosHelpers::userTiene('etapa_1')) {
  
            return $this->render('view', [
  
                  'model' => $this->findModel($ya_existe),
  
              ]);
      
        } elseif ($model->load(Yii::$app->request->post()) && $model->save()){
                          
            return $this->redirect(['view']);
                          
        } else {
                  
            return $this->render('create', [
  
                  'model' => $model,
  
                   ]);
        }
    }

    /**
     * Updates an existing Etapa1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
       // PermisosHelpers::requerirUpgradeA('Etapa_1');

        if($model =  Etapa1::find()->where(['user_id' => 
        Yii::$app->user->identity->id])->one()) {
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['view']);
        
        } else {
            
        return $this->render('update', [
                'model' => $model, 
            ]);
        }

        } else {
                
            throw new NotFoundHttpException('No Existe el Registro.');
                
        }
    }

    /**
     * Deletes an existing Etapa1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete() 
    {
        $model = Etapa1::find()->where([
            'user_id' => Yii::$app->user->identity->id
            ])->one();
            $this->findModel($model->id)->delete();
            return $this->redirect(['site/index']);
    }

    /**
     * Finds the Etapa1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Etapa1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Etapa1::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('La página solicitada no existe.');
    }
}
