<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Resultlab */

$this->title = 'Create Resultlab';
$this->params['breadcrumbs'][] = ['label' => 'Resultlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultlab-create">

    <div class="panel panel-primary">
        <div class="panel-heading"> เพิ่มข้อมูล</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>