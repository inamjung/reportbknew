<?php
$this->title = 'IC';

use kartik\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widgets\ListView;

$this->params['breadcrumbs'][] = $this->title;
$datas = $dataProvider->getModels();
?>

<?php
$form = ActiveForm::begin(['method' => 'get',
            'action' => Url::to(['healthhos/hosvisit'])]);
?>

<div class="well">
    <div class="row">

    <div class="col-xs-4 col-sm-4 col-md-4">        
        <input class="text" name="hn" class="form-control" placeholder="...ระบุ HN..">
    </div>
        
    <div class="col-xs-2 col-sm-2 col-md-2">
         <button class='btn btn-danger'>ประมวลผล</button>
    </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
<?php
if (count($datas) == 0) {
    echo "<div class='alert alert-info'>ยังไม่มีผลลัพธ์จากการค้นหาข้อมูล</div>";
    return;
}
?>
<?php

    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel'=>[
            'before'=>'',
            'type'=> kartik\grid\GridView::TYPE_INFO
        ],
        'toolbar' => [       
        '{export}',
        //'{toggleData}'       
    ],
    'exportConfig' => [
        GridView::EXCEL => [],
        //GridView::PDF => []
    ],
//        'columns'=>[
//            ['class' => 'kartik\grid\SerialColumn'],
//        ]
    ])
?>


        
        <!--///-->
        

        

