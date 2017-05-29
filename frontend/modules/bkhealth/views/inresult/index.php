<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\InresultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inresults';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inresult-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inresult', ['create'], ['class' => 'btn btn-success']) ?>
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
            'Age_y',
            // 'Bp',
            // 'Bp1',
            // 'Waist',
            // 'Waist1',
            // 'Bmi',
            // 'Bmi1',
            // 'Fbs',
            // 'Fbs1',
            // 'Tg',
            // 'Tg1',
            // 'Hdl',
            // 'Hdl1',
            // 'Bun',
            // 'Bun1',
            // 'Creatinine',
            // 'Creatinine1',
            // 'Ldl',
            // 'Ldl1',
            // 'Ast',
            // 'Ast1',
            // 'Alt',
            // 'Alt1',
            // 'Cholesterol',
            // 'Cholesterol1',
            // 'Gfr_ckd',
            // 'Gfr_ckd1',
            // 'Hct_cbc',
            // 'Hct_cbc1',
            // 'Wbc_count_cbc',
            // 'Wbc_count_cbc1',
            // 'Eo_cbc',
            // 'Eo_cbc1',
            // 'Urine_proteine_ua',
            // 'Urine_proteine_ua1',
            // 'Urine_gluose_ua',
            // 'Urine_gluose_ua1',
            // 'Rbc_ua',
            // 'Rbc_ua1',
            // 'Wbc_ua',
            // 'Wbc_ua1',
            // 'Parasite',
            // 'Parasite1',
            // 'Occountblood',
            // 'Occountblood1',
            // 'Uric',
            // 'Uric1',
            // 'ic_confirm',
            // 'ic_insys',
            // 'ic_report',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
