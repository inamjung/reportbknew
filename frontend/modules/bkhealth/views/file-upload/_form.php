<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\FileUpload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-upload-form">

    <?php $form = ActiveForm::begin([
      'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    <p>1) ไฟล์Excel ต้องเป็นประเภท  .xls เท่านั้น</p>
    <p>2) ชื่อไฟล์ให้ถูกต้องตามกำหนด - ic ชื่อไฟล์ = ic.xls </p>
    <hr>
    
    
    <div class="box-body">
    <?= $form->field($model, 'detail_file')->label('ไฟล์ข้อมูล Excel (กรุณาตรวจสอบก่อนนำเข้า)')->textInput() ?>
    
    <?= $form->field($model, 'debit_file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Upload', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
