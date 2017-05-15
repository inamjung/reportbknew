<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Insys */

$this->title = ' HN : '.$model->Hn.' | '.$model->Pt.' | อายุ '.$model->Age_y.' ปี | สิทธิบัตร '.$model->ptype->name;
$this->params['breadcrumbs'][] = ['label' => 'Insys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Vn, 'url' => ['view', 'id' => $model->Vn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="insys-update">

    <h3><?= Html::encode($this->title) ?></h3>
    <div class="panel panel-primary">
        <div class="panel-heading"> </div>
        <div class="panel-body">
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
</div>
