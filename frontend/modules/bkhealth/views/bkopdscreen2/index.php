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
            // 'Clinic',
            // 'Drugallergy',
            // 'Pdx',
            // 'Bpd',
            // 'Bps',
            // 'Bw',
            // 'Cc',
            // 'Drinking_type_id',
            // 'Smoking_type_id',
            // 'Hr',
            // 'Pe',
            // 'Pulse',
            // 'Temperature',
            // 'Height',
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
            // 'Waist',
            // 'Pttype',
            // 'Gfr_ckd',
            // 'Wbc',
            // 'Rbc',
            // 'Alk',
            // 'Eo',
            // 'Hct',
            // 'Dx_doctor',
            // 'Dname',
            // 'ic_confirm',
            // 'ic_insys',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
