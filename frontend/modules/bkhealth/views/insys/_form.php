<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Insys */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="insys-form">

    <?php $form = ActiveForm::begin(); ?>

    
    
    <?= $form->field($model, 'ic_report')->label('สถานะ')
             ->radioList(['0'=>'ยังไม่พบแพทย์','1'=>'พบแพทย์แล้ว']) ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i> ยืนยันพบแพทย์' : '<i class="glyphicon glyphicon-ok"></i> ยืนยันพบแพทย์', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
