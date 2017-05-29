<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Inresult */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inresult-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vstdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Age_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bp1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Waist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Waist1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bmi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bmi1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fbs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fbs1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tg1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hdl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hdl1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bun1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Creatinine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Creatinine1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ldl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ldl1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ast1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alt1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cholesterol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cholesterol1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gfr_ckd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gfr_ckd1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hct_cbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hct_cbc1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc_count_cbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc_count_cbc1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Eo_cbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Eo_cbc1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urine_proteine_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urine_proteine_ua1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urine_gluose_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urine_gluose_ua1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rbc_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rbc_ua1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc_ua1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Parasite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Parasite1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Occountblood')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Occountblood1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Uric')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Uric1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ic_confirm')->textInput() ?>

    <?= $form->field($model, 'ic_insys')->textInput() ?>

    <?= $form->field($model, 'ic_report')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
