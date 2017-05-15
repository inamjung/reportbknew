<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Bkopdscreen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bkopdscreen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vstdate')->textInput() ?>

    <?= $form->field($model, 'Vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Age_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Clinic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Drugallergy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Drinking_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Smoking_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pulse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Temperature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fbs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bmi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hdl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Glucurine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Creatinine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hba1c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ldl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cholesterol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Waist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gfr_ckd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Eo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Dx_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Dname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ic_confirm')->textInput() ?>

    <?= $form->field($model, 'ic_insys')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
