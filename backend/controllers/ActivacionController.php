<?php

namespace backend\controllers;

use backend\models\Activacion;
use backend\models\search\ActivacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;
use common\models\PermisosHelpers;
/**
 * ActivacionController implements the CRUD actions for Activacion model.
 */
class ActivacionController extends Controller
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
                           'actions' => ['update'],
                           'allow' => true,
                           'roles' => ['@'],
                           'matchCallback' => function ($rule, $action) {
                            return PermisosHelpers::requerirMinimoRol('SuperUsuario') 
                            && PermisosHelpers::requerirEstado('Activo');
                          
                           }
                       ],
                        [
                           'actions' => [ 'update'],
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
     * Lists all Activacion models.
     *
     * @return string
     */
   

    /**
     * Displays a single Activacion model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
  

    /**
     * Updates an existing Activacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
        if($model =  Activacion::find()->where(['id' => 
        1])->one()) {
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['update']);
        
        } else {
            
        return $this->render('update', [
                'model' => $model, 
            ]);
        }

        } else {
                
            throw new NotFoundHttpException('No Existe el Perfil.');
                
        }
    }

    /**
     * Deletes an existing Activacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
  

    /**
     * Finds the Activacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Activacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Activacion::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
