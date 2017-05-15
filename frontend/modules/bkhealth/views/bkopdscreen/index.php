<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\BkopdscreenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bkopdscreens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bkopdscreen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bkopdscreen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Vstdate',
            'Vn',
            'Hn',
            'Pt',
            'Sex',
            // 'Age_y',
            // 'Pttype',
            // 'Clinic',
            // 'Drugallergy',
            // 'Pdx',
            // 'Height',
            // 'Bw',
            // 'Waist',
            // 'Cc',
            // 'Bpd',
            // 'Bps',
            // 'Drinking_type_id',
            // 'Smoking_type_id',
            // 'Hr',
            // 'Pe',
            // 'Pulse',
            // 'Temperature',
            // 'Rr',
            // 'Fbs',
            // 'Bmi',
            // 'Tg',
            // 'Hdl',
            // 'Glucurine',
            // 'Bun',
            // 'Creatinine',
            // 'Ua',
            // 'Hba1c',
            // 'Tc',
            // 'Ldl',
            // 'Ast',
            // 'Alt',
            // 'Cholesterol',
            // 'Gfr_ckd',
            // 'Hct_cbc',
            // 'Wbc_count_cbc',
            // 'Eo_cbc',
            // 'Urine_proteine_ua',
            // 'Urine_gluose_ua',
            // 'Rbc_ua',
            // 'Wbc_ua',
            // 'Parasite',
            // 'Occountblood',
            // 'Dx_doctor',
            // 'Dname',
            // 'ic_confirm',
            // 'ic_insys',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
