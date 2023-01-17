<?php

namespace frontend\controllers;

use frontend\models\Etapa4;
use frontend\models\search\Etapa4Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;
use common\models\PermisosHelpers;
use common\models\RegistrosHelpers;
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
                    'only' => ['index', 'view'],
                    'rules' => [
                        [
                            'actions' => ['index', 'view'],
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
                           'actions' => ['index', 'view'],
                            'allow' => true,
                            'roles' => ['@'],
                            'matchCallback' => function ($rule, $action) {
                                return PermisosHelpers::requerirEstado('Activo')
                                && PermisosHelpers::activaEtapa4('Activo');
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
    

    /**
     * Updates an existing Etapa4 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
  

    /**
     * Deletes an existing Etapa4 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    

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
