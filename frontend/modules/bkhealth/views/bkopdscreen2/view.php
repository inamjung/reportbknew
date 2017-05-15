<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Bkopdscreen */

$this->title = $model->Vn;
$this->params['breadcrumbs'][] = ['label' => 'Bkopdscreens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bkopdscreen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Vn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Vn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Vstdate',
            'Vn',
            'Hn',
            'Pt',
            'Sex',
            'Age_y',
            'Clinic',
            'Drugallergy',
            'Pdx',
            'Bpd',
            'Bps',
            'Bw',
            'Cc',
            'Drinking_type_id',
            'Smoking_type_id',
            'Hr',
            'Pe',
            'Pulse',
            'Temperature',
            'Height',
            'Rr',
            'Fbs',
            'Bmi',
            'Tg',
            'Hdl',
            'Glucurine',
            'Bun',
            'Creatinine',
            'Ua',
            'Hba1c',
            'Tc',
            'Ldl',
            'Ast',
            'Alt',
            'Cholesterol',
            'Waist',
            'Pttype',
            'Gfr_ckd',
            'Wbc',
            'Rbc',
            'Alk',
            'Eo',
            'Hct',
            'Dx_doctor',
            'Dname',
            'ic_confirm',
            'ic_insys',
        ],
    ]) ?>

</div>
