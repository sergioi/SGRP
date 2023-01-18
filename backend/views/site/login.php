<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Sistema de Gestión para Residencias Profesionales';
?>


<section class=" text-center text-lg-start">
            <style>
                .rounded-t-5 {
                border-top-left-radius: 0.5rem;
                border-top-right-radius: 0.5rem;
                }

                @media (min-width: 992px) {
                .rounded-tr-lg-0 {
                    border-top-right-radius: 0;
                }

                .rounded-bl-lg-5 {
                    border-bottom-left-radius: 0.5rem;
                }
                }
            </style>
    <div class="jumbotron ">
        <div class="row g-0 d-flex align-items-center">
            
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="imagenes/login.png" alt="Trendy Pants and Shoes"
                class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-8">
                 <div class="card-body py-5 px-md-5">
                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>Inicia sesión Para Ingresar al Área Administrativa.</p>
                 
                    <div class="row">
                        <div class="col-lg-5">
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>   
                        </div>
                    </div>
                     <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <div class="form-group">
                                    <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>

                            <?php ActiveForm::end(); ?>
                </div>
            </div>   
        </div>
    </div>
</section>
