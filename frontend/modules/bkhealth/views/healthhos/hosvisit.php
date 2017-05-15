<?php
$this->title = 'ประวัติตรวจ';

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
        <input class="text" name="hn" class="form-control" 
               placeholder="...ระบุ HN.." value="<?= isset($_GET['hn']) ? $_GET['hn'] : '' ?>" >
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
            'heading'=>$datas[1]['hn'].' : '.$datas[4]['pt'].' | อายุ '.$datas[3]['age_y'].' ปี | สิทธิบัตร : '.$datas[2]['pttname'],
            'before'=>'1 ) เลือก Visit ที่เป็นการตรวจสุขภาพประจำปี '.
            '<br>'. '2 ) คลิกช่องวันที่ที่เลือก ถ้านำเข้าได้จะปรากฎคำว่า "เพิ่มข้อมูลแล้ว" แล้วกด ปิด ## หากไม่มีข้อความนี้แสดงว่า Visit ที่เลือกถูกนำเข้าไปแล้ว ให้กด ปิด แล้วเลือก Visit อื่น',
            'type'=> kartik\grid\GridView::TYPE_INFO
        ],
        'toolbar' => [       
        //'{export}',
        //'{toggleData}'       
    ],
    'exportConfig' => [
        GridView::EXCEL => [],
        //GridView::PDF => []
    ],
        'columns'=>[
            ['class' => 'kartik\grid\SerialColumn'],
            //'vstdate',
            //'pt',
            [
                'label' => 'vstdate',
                'attribute' => 'vstdate',
                'format' => 'raw',
                'value' => function($model, $key, $widget) {
                    return Html::a(Html::encode ( DateThai($model['vstdate'])) , [
                                'healthhos/insertsys/',
                        'Vstdate' =>$model['vstdate'],
                        'Vn' => $model['vn'],
                        'Hn'=>$model['hn'],
                        'Pt'=>$model['pt'],
                        'Sex'=>$model['sex'],
                        'Age_y'=>$model['age_y'],
                        'Pttype'=>$model['pttype'],
                        'Clinic'=>$model['clinic'],                        
                        'Drugallergy'=>$model['drugallergy'],
                        'Pdx'=>$model['pdx'],
                        'Height'=>$model['height'],
                        'Bw'=>$model['bw'],
                        'Waist'=>$model['waist'],
                        'Cc'=>$model['cc'],
                        'Bpd'=>$model['bpd'],
                        'Bps'=>$model['bps'], 
                        'Drinking_type_id'=>$model['drinking_type_id'],
                        'Smoking_type_id'=>$model['smoking_type_id'],
                        'Hr'=>$model['hr'],
                        'Pe'=>$model['pe'],
                        'Pulse'=>$model['pulse'],
                        'Temperature'=>$model['temperature'],                       
                        'Rr'=>$model['rr'],
                        'Fbs'=>$model['fbs'],
                        'Bmi'=>$model['bmi'],
                        'Tg'=>$model['tg'],
                        'Hdl'=>$model['hdl'],
                        'Glucurine'=>$model['glucurine'],
                        'Bun'=>$model['bun'],
                        'Creatinine'=>$model['creatinine'],
                        'Ua'=>$model['ua'],                        
                        'Hba1c'=>$model['hba1c'],
                        'Tc'=>$model['tc'],
                        'Ldl'=>$model['ldl'],
                        'Ast'=>$model['ast'],
                        'Alt'=>$model['alt'],
                        'Cholesterol'=>$model['cholesterol'],  
                        'Gfr_ckd'=>$model['gfr_ckd'],
                        'Hct_cbc'=>$model['hct_cbc'],
                        'Wbc_count_cbc'=>$model['wbc_count_cbc'],                        
                        'Eo_cbc'=>$model['eo_cbc'],
                        'Urine_proteine_ua'=>$model['urine_proteine_ua'],
                        'Urine_gluose_ua'=>$model['urine_gluose_ua'],                        
                        'Rbc_ua'=>$model['rbc_ua'],
                        'Wbc_ua'=>$model['wbc_ua'],
                        'Parasite'=>$model['parasite'],
                        'Occountblood'=>$model['occountblood'],                        
                        'Dx_doctor'=>$model['dx_doctor'],
                        'Dname'=>$model['dname'],
//                        'ic_confirm'=>$model['ic_confirm'],
//                        'ic_insys'=>$model['ic_insys'],
                        
                          ], 
                            [
                                'data-toggle' => "modal",
                                'data-target' => "#hosvisit",
                            ]
                    );
                },
                        'contentOptions' => ['class' => 'text-center'],
                    ],
            'pdx',
            'cc',
//            'waist',
//            'bmi',
            'fbs',
            'tg',
            'hdl',
            'ldl',
            'tc',
            'hct_cbc' ,
            'wbc_count_cbc',   
            'eo_cbc',
            'rbc_ua',
            'wbc_ua',            
            'creatinine',
            //'gfr_ckd'
        ]
    ])
?>
<?php Pjax::end() ?>

<?php
        Modal::begin([
            'id' => 'hosvisit',            
            'header' => '<h4 class="modal-title"></h4>',            
            'size' => 'modal-lg',
            'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
        ]);
        
        Modal::end();
        ?>

        <?php
        $this->registerJs("
    $('#hosvisit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var title = button.data('title') 
        var href = button.attr('href') 
        modal.find('.modal-title').html(title)
        modal.find('.modal-body').html('<i class=\"fa fa-spinner fa-spin\"></i>')
        $.post(href)
            .done(function( data ) {
                modal.find('.modal-body').html('<i class=\"glyphicon glyphicon-ok\"></i> เพิ่มข้อมูลแล้ว')
            });
        })
");
        ?>  
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