<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\Pttype;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Insys */

$this->title = ' HN : '.$model->Hn.' | '.$model->Pt.' | อายุ '.$model->Age_y.' ปี | สิทธิบัตร '.$model->ptype->name;
$this->params['breadcrumbs'][] = ['label' => 'Insys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insys-form">

<?php 
        $dataProvider = new ActiveDataProvider([
            'query'=> frontend\modules\bkhealth\models\Insys::find()
                ->where(['Vn' =>$model->Vn])
                ->limit('1'),
            'pagination'=>[
                'pageSize'=> 20
            ]
        ]);    
    ?>
<div class="insys-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('ทะเบียน', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->Vn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->Vn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('พิมพ์', ['update', 'id' => $model->Vn], ['class' => 'btn btn-info']) ?>
    </p>
      <?php
    $attributes = [
        
        [
        'group'=>true,
        'label'=>'# ข้อมูลทั่วไป',
        'rowOptions'=>['class'=>'success']
    ],
    [
        'columns' => [
            [
                'attribute'=>'Cc', 
                'label'=>'อาการสำคัญ',
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
            [
                'attribute'=>'Pe',   
                'label'=>'การตรวจร่างกาย',
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
        ],
    ],    
    [
        'columns' => [
            [               
                'attribute'=>'Bw', 
                'value'=>$model->Bw.'  กก.',
                //'format'=>'integer',
                'label'=>'น้ำหนัก',
                'displayOnly'=>true,
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Height', 
                'value'=>$model->Height.'  ซม.',
                'label'=>'ส่วนสูง',                
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
        ],
    ],
    [
        'columns' => [
            [
                'attribute'=>'Clinic', 
                'label'=>'โรคประจำตัว',                
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],            
            [
                'attribute'=>'Drugallergy',                              
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],                    
        ],
        ],
        [
        'columns' => [
            [
                'attribute'=>'Drinking_type_id', 
                'value'=> $model->pdrink->drinking_type_name,
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
            [
                'attribute'=>'Smoking_type_id',  
                'value'=> $model->psmoke->smoking_type_name,
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
        ],
    ],
    
        [
        'group'=>true,
        'label'=>'#  ดัชนีมวลกาย',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
        'attribute'=>'Bmi',
        'format'=>'raw',
        'valueColOptions'=>['style'=>'width:30%']
    ],  
    [
        'group'=>true,
        'label'=>'#  รอบเอว',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
        'attribute'=>'Waist',
        'label'=>'Waist',  
        'format'=>'integer',
        'valueColOptions'=>['style'=>'width:30%']
    ],  
    [
        'group'=>true,
        'label'=>'#  ความดันโลหิต',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
                'attribute'=>'Bp', 
                'label'=>'BP',
                'format'=>'raw', 
                'value'=>'<kbd>'.$model->Bp.'</kbd>',
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
      ],  
     [
        'group'=>true,
        'label'=>'#  เบาหวาน',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
                'attribute'=>'Fbs', 
                'format'=>'integer',                
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
      ],  
     [
        'group'=>true,
        'label'=>'#  ภาวะเสี่ยงโรคเกาต์',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
                'attribute'=>'Ua', 
                'format'=>'integer',                
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
      ],
        
     [
        'group'=>true,
        'label'=>'## ไขมันในเลือด',
        'rowOptions'=>['class'=>'danger'],        
    ],
            [
                'attribute'=>'Cholesterol', 
                'format'=>'integer', 
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Tg', 
                'label'=>'Trigleceride',
                'format'=>'integer', 
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Hdl', 
                'format'=>'integer', 
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Ldl',
                'format'=>'integer', 
                'valueColOptions'=>['style'=>'width:30%']
            ],  
            [
                'attribute'=>'Creatinine', 
                'format'=>'integer', 
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Gfr_ckd',
                'format'=>'integer', 
                'valueColOptions'=>['style'=>'width:30%']
            ], 
        
    [
        'group'=>true,
        'label'=>'## CBC',
        'rowOptions'=>['class'=>'danger']
    ],
            [
                'attribute'=>'Hct_cbc',
                'displayOnly'=>true,
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Wbc_count_cbc',
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
            [
                'attribute'=>'Eo_cbc',
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
    [
        'group'=>true,
        'label'=>'## ตรวจปัสสาวะ',
        'rowOptions'=>['class'=>'danger'],
        //'groupOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'Urine_proteine_ua', 
        'inputContainer' => ['class'=>'col-sm-6'],
    ],
    [
        'attribute'=>'Urine_gluose_ua',
        'inputContainer' => ['class'=>'col-sm-6'],
    ],
    [
        'attribute'=>'Rbc_ua',
        'inputContainer' => ['class'=>'col-sm-6'],
    ],
    [
        'attribute'=>'Wbc_ua',
        'inputContainer' => ['class'=>'col-sm-6'],
    ],    
    [
        'group'=>true,
        'label'=>'## ตรวจอุจจาระ',
        'rowOptions'=>['class'=>'danger'],        
    ],
            [
                'attribute'=>'Parasite', 
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'Occountblood', 
                'valueColOptions'=>['style'=>'width:30%']
            ], 
    
];

// View file rendering the widget
echo DetailView::widget([
    'model' => $model,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'attributes' => $attributes,
    'mode' => 'view',    
    'striped' => false, 
    'responsive' => true,
    'hover' => true,
    'hAlign'=>true,
    'vAlign'=>true,
    'fadeDelay'=>true,

   
]);
?>
</div
</div>
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
