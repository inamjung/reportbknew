<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\modules\inven\models\Invenmains */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invenmains-form">

    <?php $form = ActiveForm::begin(); ?>
 
     <?=
                $form->field($model, 'date')->widget(
                        DatePicker::className(), [
                        'language' => 'th',
                        'inline' => false,        
                        'clientOptions' => [
                            'todayHighlight'=>true,
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd']]);
            ?>

    <?= $form->field($model, 'department_id')->widget(\kartik\widgets\Select2::className(),[
        'data'=> yii\helpers\ArrayHelper::map(\frontend\modules\inven\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'เลือกแผนก...'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?php // $form->field($model, 'user_id')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
