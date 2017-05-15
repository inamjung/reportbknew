<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\InsysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ทะเบียนผลตรวจสุขภาพ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insys-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Insys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
      <?php Pjax::begin(['id' => 'insys-grid']); ?>
    <?php
    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'striped'=>false,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel'=>[
            'heading'=>'ทะเบียนผลตรวจสุขภาพ',
            //'before'=>$datas[4]['pt'],
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
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

           [             
             'attribute'=>'Vstdate',
             'value'=> function($model){
                return DateThai($model->Vstdate);
             },
            ],
            //'Vn',
            'Hn',
            'Pt',
            'Cc',
            //'Sex',
            // 'Age_y',
            // 'Pttype',
            // 'Clinic',
            // 'Drugallergy',
             'Pdx',
            // 'Height',
            // 'Bw',
            // 'Waist',
             
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

            [
                'label' => 'สถานะ',
                'attribute' => 'ic_report',
                'format' => 'raw',
                'value' => function($model){
                    return  $model->ic_report == '1' ? "<i class=\"glyphicon glyphicon-ok\" style=\"color: green\"></i>" : "<i class=\"glyphicon glyphicon-remove\" style=\"color: red\"></i>";
                },
                'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center','style'=>'width: 80px;'],               
            ],            

            ['class' => 'yii\grid\ActionColumn',
              'template'=> '{update}{view}' ,
              'buttons'=>[
                  'update' => function ($url, $model, $key) {
                                return Html::a('<span class="glyphicon glyphicon-upload"></span>', '#', [
                                            'class' => 'activity-update-link btn btn-info',
                                            'title' => 'ส่งพบแพทย์',
                                            'data-toggle' => 'modal',
                                            'data-target' => '#activity-modal',
                                            'data-id' => $key,
                                            'data-pjax' => '0',
                                ]);
                            },
                  'view'=> function($url,$model){
                     return Html::a('<span class="glyphicon glyphicon-search"></span>',['/bkhealth/insys/view','id'=>$model->Vn] ,['title' => 'ดู', 'class' => 'btn btn-primary']);
                        },
                    ]  
            ],
        ],
    ]); ?>
     <?php Pjax::end() ?>
</div>
<?php
        Modal::begin([
            'id' => 'activity-modal',
            'header' => '<h4 class="modal-title"> ถ้าผลตรวจทางชันสูตรเรียบร้อยแล้ว รอส่ง พบแพทย์เพื่อวินิจฉัย</h4>',
            'size' => 'modal-lg',
            'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
        ]);
        Modal::end();
?>

        <?php $this->registerJs('
        function init_click_handlers(){
            
            
            $(".activity-update-link").click(function(e) {
                    var fID = $(this).closest("tr").data("key");
                    $.get(
                        "?r=/bkhealth/insys/update",
                        {
                            id: fID
                        },
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);                            
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            
        }
        init_click_handlers(); //first run
        $("#insys-grid").on("pjax:success", function() {
          init_click_handlers(); //reactivate links in grid after pjax update
        });'); ?>

<?php

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		//$strYear=substr($strYear,2,2);
		return "$strDay $strMonthThai $strYear";
	}       
?>
