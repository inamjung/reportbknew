<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Resultlab */

$this->title = 'Update Resultlab: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Resultlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resultlab-update">

   <div class="panel panel-warning">
        <div class="panel-heading"> แก้ไขข้อมูล</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>
