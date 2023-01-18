<?php

namespace backend\controllers;

use backend\models\Etapa4;
use backend\models\search\Etapa4Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use common\models\PermisosHelpers;

/**
 * Etapa4Controller implements the CRUD actions for Etapa4 model.
 */
class Etapa4Controller extends Controller
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
                           'actions' => ['index', 'create','update', 'view',],
                           'allow' => true,
                           'roles' => ['@'],
                           'matchCallback' => function ($rule, $action) {
                            return PermisosHelpers::requerirMinimoRol('Admin') 
                            && PermisosHelpers::requerirEstado('Activo');
                           }
                       ],
                        [
                           'actions' => [ 'update', 'delete'],
                           'allow' => true,
                           'roles' => ['@'],
                           'matchCallback' => function ($rule, $action) {
                            return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                            && PermisosHelpers::requerirEstado('Activo');
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
     * Lists all Etapa4 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new Etapa4Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionExel()
    {
        return $this->render('indexExel');
    }

    /**
     * Displays a single Etapa4 model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Etapa4 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Etapa4();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Etapa4 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Etapa4 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Etapa4 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Etapa4 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Etapa4::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
