<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\ResultlabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultlab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'value') ?>

    <?= $form->field($model, 'default') ?>

    <?= $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'consult') ?>

    <?php // echo $form->field($model, 'picconsult') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
