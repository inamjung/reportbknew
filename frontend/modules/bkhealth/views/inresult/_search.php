<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\InresultSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inresult-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Vstdate') ?>

    <?= $form->field($model, 'Vn') ?>

    <?= $form->field($model, 'Hn') ?>

    <?= $form->field($model, 'Pt') ?>

    <?= $form->field($model, 'Age_y') ?>

    <?php // echo $form->field($model, 'Bp') ?>

    <?php // echo $form->field($model, 'Bp1') ?>

    <?php // echo $form->field($model, 'Waist') ?>

    <?php // echo $form->field($model, 'Waist1') ?>

    <?php // echo $form->field($model, 'Bmi') ?>

    <?php // echo $form->field($model, 'Bmi1') ?>

    <?php // echo $form->field($model, 'Fbs') ?>

    <?php // echo $form->field($model, 'Fbs1') ?>

    <?php // echo $form->field($model, 'Tg') ?>

    <?php // echo $form->field($model, 'Tg1') ?>

    <?php // echo $form->field($model, 'Hdl') ?>

    <?php // echo $form->field($model, 'Hd1') ?>

    <?php // echo $form->field($model, 'Bun') ?>

    <?php // echo $form->field($model, 'Bun1') ?>

    <?php // echo $form->field($model, 'Creatinine') ?>

    <?php // echo $form->field($model, 'Creatinine1') ?>

    <?php // echo $form->field($model, 'Ldl') ?>

    <?php // echo $form->field($model, 'Ldl1') ?>

    <?php // echo $form->field($model, 'Ast') ?>

    <?php // echo $form->field($model, 'Ast1') ?>

    <?php // echo $form->field($model, 'Alt') ?>

    <?php // echo $form->field($model, 'Alt1') ?>

    <?php // echo $form->field($model, 'Cholesterol') ?>

    <?php // echo $form->field($model, 'Cholesterol1') ?>

    <?php // echo $form->field($model, 'Gfr_ckd') ?>

    <?php // echo $form->field($model, 'Gfr_ckd1') ?>

    <?php // echo $form->field($model, 'Hct_cbc') ?>

    <?php // echo $form->field($model, 'Hct_cbc1') ?>

    <?php // echo $form->field($model, 'Wbc_count_cbc') ?>

    <?php // echo $form->field($model, 'Wbc_count_cbc1') ?>

    <?php // echo $form->field($model, 'Eo_cbc') ?>

    <?php // echo $form->field($model, 'Eo_cbc1') ?>

    <?php // echo $form->field($model, 'Urine_proteine_ua') ?>

    <?php // echo $form->field($model, 'Urine_proteine_ua1') ?>

    <?php // echo $form->field($model, 'Urine_gluose_ua') ?>

    <?php // echo $form->field($model, 'Urine_gluose_ua1') ?>

    <?php // echo $form->field($model, 'Rbc_ua') ?>

    <?php // echo $form->field($model, 'Rbc_ua1') ?>

    <?php // echo $form->field($model, 'Wbc_ua') ?>

    <?php // echo $form->field($model, 'Wbc_ua1') ?>

    <?php // echo $form->field($model, 'Parasite') ?>

    <?php // echo $form->field($model, 'Parasite1') ?>

    <?php // echo $form->field($model, 'Occountblood') ?>

    <?php // echo $form->field($model, 'Occountblood1') ?>

    <?php // echo $form->field($model, 'Uric') ?>

    <?php // echo $form->field($model, 'Uric1') ?>

    <?php // echo $form->field($model, 'ic_confirm') ?>

    <?php // echo $form->field($model, 'ic_insys') ?>

    <?php // echo $form->field($model, 'ic_report') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
