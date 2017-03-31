<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use frontend\modules\inven\models\Invendetails;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\modules\inven\models\Invenmains */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $this->registerJs("
    $('.delete-button').click(function() {
        var detail = $(this).closest('.invenmains-detail');
        var updateType = detail.find('.update-type');
        if (updateType.val() === " . json_encode(frontend\modules\inven\models\Invendetails::UPDATE_TYPE_UPDATE) . ") {
            //marking the row for deletion
            updateType.val(" . json_encode(frontend\modules\inven\models\Invendetails::UPDATE_TYPE_DELETE) . ");
            detail.hide();
        } else {
            //if the row is a new row, delete the row
            detail.remove();
        }

    });
");
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
    
    <?php foreach ($modelDetails as $i => $modelDetail) : ?>
        <div class="row invenmains-detail invenmains-detail-<?= $i ?>">
            <div class="col-sm-4">
                <?= Html::activeHiddenInput($modelDetail, "[$i]id") ?>
                <?= Html::activeHiddenInput($modelDetail, "[$i]updateType", ['class' => 'update-type']) ?>
                
                <?= $form->field($modelDetail, "[$i]product_id")->label('') ->widget(\kartik\select2\Select2::className(),[
                    'data'=> ArrayHelper::map(\frontend\modules\inven\models\Products::find()->all(), 'id','name'),
                                        'options' => [
                                        'placeholder' => '<--รายการ-->'],
                                        'pluginOptions' => [
                                            'allowClear' => true,
                                            ],
                                    ]);
                                ?>
                </div>
                <div class="col-sm-2">
                <?= $form->field($modelDetail, "[$i]qty")->label('จำนวนเบิก') ?>                    
                </div>
            
            <div class="col-sm-2">
                <?= $form->field($modelDetail, "[$i]remark") ?>                    
            </div>
            
            <div class="col-md-2">
                <?= Html::button('x', ['class' => 'delete-button btn btn-danger', 'data-target' => "invenmains-detail-$i"]) ?>
            </div>
        </div>
    <?php endforeach; ?>

   <div class="form-group">
       <div class="row">
           <div class="col-sm-offset-1 col-sm-2">
               <?= Html::submitButton('<i class="glyphicon glyphicon-plus"></i> เพิ่มรายการเบิก', ['name' => 'addRow', 'value' => 'true', 'class' => 'btn btn-info']) ?>
           </div>
           <div class="col-sm-offset-2 col-sm-2">
               <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i> บันทึก' : '<i class="glyphicon glyphicon-ok"></i> บันทึกการแก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
           </div>
           
           
       </div>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>