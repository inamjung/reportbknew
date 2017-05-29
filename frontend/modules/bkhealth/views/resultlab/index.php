<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\ResultlabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resultlabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultlab-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 
    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'striped'=>false,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel'=>[
            'heading'=>'ตารางเทียบผลแลป',
            //'before'=>$datas[4]['pt'],
            'type'=> kartik\grid\GridView::TYPE_SUCCESS
        ],
        'toolbar' => [       
        //'{export}',
        //'{toggleData}'       
    ],
//    'exportConfig' => [
//        GridView::EXCEL => [],
//        //GridView::PDF => []
//    ],
        'columns' => [
            //['class' => 'kartik\grid\SerialColumn'],

            //'id',
            'code',
            'name',
            'value',
            'default',
            'result',
            'consult:ntext',
            [
                'attribute'=>'picconsult',
                'format'=>'html',
                'value'=> function ($model){
                    return Html::img('icpics/'.$model->picconsult,['class'=>'thumbnail','width'=>120]);
                },
            ],
             

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
