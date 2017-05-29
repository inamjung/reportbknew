<?php
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

$datas = $dataProvider->getModels();


?>

<?php
$form = ActiveForm::begin(['method' => 'get',
            'action' => Url::to(['labbydate/labvisit'])]);
?>

<div class="well">
    <p>
    <h3 style="color: blue">กรอก เลขบัตรประชาชน 13 หลัก</h3>
</p><br>
    <div class="row">

    <div class="col-xs-4 col-sm-4 col-md-4">        
        <input class="text" name="cid" class="form-control" 
               placeholder="ระบุ เลขบัตรประชาชน.." value="<?= isset($_GET['cid']) ? $_GET['cid'] : '' ?>" >
        <button class='btn btn-danger'>คลิก ! ค้นหา</button>
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
<?php Pjax::begin(['id' => 'hosvisit_id']); ?>

<?php

    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'striped'=>false,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel'=>[
            'heading'=>'<span style="color: blue">'.$datas[1]['pt_name'] .'</span>',
            'before'=>'<span style="color: red">'.'เลือก วันที่ ที่ต้องการดูผลแลป' .'</span>',
            'type'=> kartik\grid\GridView::TYPE_DEFAULT
        ],
        'toolbar' => [       
        //'{export}',
        //'{toggleData}'       
    ],
       'columns'=>[['class' => 'kartik\grid\SerialColumn'],
                      
            [
               'header'=>'วันที่ตรวจ',
               'attribute'=>'order_date',
               'format'=>'raw',
               'value'=>function ($model, $index, $widget){
                    return Html::a(DateThai
                            ($model['order_date']),                            
                            ['labbydate/indivlabvisit/', 'lab_order_number' =>$model['lab_order_number'],
                            ],
                            [
                              'data-toggle'=>"modal",
                              'data-target'=>"#myModalrisk",
                             // 'data-title'=>"แก้ไขข้อมูล",  
                            ],
                            [                                
                                    'title'=>'ผลแลป!',
                                    'target'=>'_blank'
                            ]
                    );
                },
        //'headerOptions' => ['class' => 'text-center'],
    ],
            [
                'attribute'=>'lab_order_number',                
                'header'=>'เลขที่ใบแลป',
                
            ],               
            ]
    ]);
?>
<?php Pjax::end() ?>

<?php

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		$strYear=substr($strYear,2,2);
		return "$strDay $strMonthThai $strYear";
	}       
?>

<?php
Modal::begin([
    'id' => 'myModalrisk',
    'header' => '<h4 class="modal-title"></h4>',
    'size' => 'modal-lg',
]);

 
Modal::end();
?>
<?php 
$this->registerJs("
    $('#myModalrisk').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var title = button.data('title') 
        var href = button.attr('href') 
        modal.find('.modal-title').html(title)
        modal.find('.modal-body').html('<i class=\"fa fa-spinner fa-spin\"></i>')
        $.post(href)
            .done(function( data ) {
                modal.find('.modal-body').html(data)
            });
        })
");

?>