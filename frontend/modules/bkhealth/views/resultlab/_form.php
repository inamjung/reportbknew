<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Resultlab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultlab-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'code')->label('Code : ห้ามกำหนดซ้ำ')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consult')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'grouplab_id')->textInput(['maxlength' => true]) ?>
    
    <hr>
    <?= $form->field($model, 'icpic_img')->fileInput() ?>
    <?php if(!$model->isNewRecord){?>
    <?= Html::img('icpics/'.$model->picconsult,['class'=>'img-responsive thumbnail','width'=>200]);?>
    <?php    
    }
    ?>

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
