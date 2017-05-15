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
            'Pttype',
            'Clinic',
            'Drugallergy',
            'Pdx',
            'Height',
            'Bw',
            'Waist',
            'Cc',
            'Bpd',
            'Bps',
            'Drinking_type_id',
            'Smoking_type_id',
            'Hr',
            'Pe',
            'Pulse',
            'Temperature',
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
            'Gfr_ckd',
            'Hct_cbc',
            'Wbc_count_cbc',
            'Eo_cbc',
            'Urine_proteine_ua',
            'Urine_gluose_ua',
            'Rbc_ua',
            'Wbc_ua',
            'Parasite',
            'Occountblood',
            'Dx_doctor',
            'Dname',
            'ic_confirm',
            'ic_insys',
        ],
    ]) ?>

</div>
