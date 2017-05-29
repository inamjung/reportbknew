<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Inresult */

$this->title = ' HN : '.$model->Hn.' | '.$model->Pt.' | อายุ '.$model->Age_y.' ปี';
$this->params['breadcrumbs'][] = ['label' => 'Inresults', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="inresult-view">
    
    <?= Html::a('<i class="glyphicon glyphicon-print"></i> รายงานผล', ['/bkhealth/insys/report', 'id' => $model->Vn]
            ,['class' => 'btn btn-info','target'=>'_bank' ]) ?>
    <?= Html::a('<i class="glyphicon glyphicon-print"></i> คำแนะนำ', ['/bkhealth/insys/consult', 'id' => $model->Vn]
            ,['class' => 'btn btn-info','target'=>'_bank' ]) ?>
    <p>
    
    <div class="alert alert-warning ">
        <h3 style="color: blue"><?= Html::encode($this->title) ?></h3>
    </div>
    

<!--    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Vn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Vn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>-->
    
    <?php
    $attributes = [ 
        
    [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'#  ดัชนีมวลกาย'.'</span>',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],
    [
        'columns' => [
        [
            'attribute'=>'Bmi',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Bmi1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inbmi->result.'</span>',
            'label'=>'แปรผล BMI',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
            'group'=>true,
            'label'=>'<span style="color: blue">'.'#  รอบเอว'.'</span>',
            'rowOptions'=>['class'=>'info'],
            //'groupOptions'=>['class'=>'text-center']
        ], 

      [
        'columns' => [
        [
            'attribute'=>'Waist',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Waist1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inwaist->result.'</span>',
            'label'=>'แปรผล รอบเอว',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        
    [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'#  ความดันโลหิต'.'</span>',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],
      [
        'columns' => [
        [
            'attribute'=>'Bp',
            //'value'=>$model->insyses->Bps.' / '.$model->insyses->Bpd,
            'value'=>$model->insyses->bp1,
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Bp1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inbp->result.'</span>',
            'label'=>'แปรผล ความดันโลหิต',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],  
        
      
     [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'#  เบาหวาน'.'</span>',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
        'columns' => [
        [
            'attribute'=>'Fbs',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Fbs1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->infbs->result.'</span>',
            'label'=>'แปรผล เบาหวาน',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        
     [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'#  ภาวะเสี่ยงโรคเกาต์'.'</span>',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],   
      [
        'columns' => [
        [
            'attribute'=>'Uric',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Uric1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inuric->result.'</span>',
            'label'=>'แปรผล โรคเก๊า',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        
     [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'## ไขมันในเลือด'.'</span>',
        'rowOptions'=>['class'=>'danger'],        
    ],
        [
        'columns' => [
        [
            'attribute'=>'Cholesterol',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Cholesterol1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->incho->result.'</span>',
            'label'=>'แปรผล Cholesterol',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Tg',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Tg1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->intg->result.'</span>',
            'label'=>'แปรผล Tg',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
         [
        'columns' => [
        [
            'attribute'=>'Hdl',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Hdl1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inhdl->result.'</span>',
            'label'=>'แปรผล Hdl',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],   
         
        [
        'columns' => [
        [
            'attribute'=>'Ldl',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Ldl1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inldl->result.'</span>',
            'label'=>'แปรผล Hdl',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],  
        
        
    [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'## CBC'.'</span>',
        'rowOptions'=>['class'=>'danger']
    ],
       [
        'columns' => [
        [
            'attribute'=>'Hct_cbc',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Hct_cbc1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inhct->result.'</span>',
            'label'=>'แปรผล Hct_cbc',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Wbc_count_cbc',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Wbc_count_cbc1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inwbccbc->result.'</span>',
            'label'=>'แปรผล Wbc_count_cbc',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Eo_cbc',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Eo_cbc1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->ineo->result.'</span>',
            'label'=>'แปรผล Eo_cbc',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
                    
     [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'## การทำงานของไต'.'</span>',
        'rowOptions'=>['class'=>'danger']
    ],
        [
        'columns' => [
        [
            'attribute'=>'Gfr_ckd',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Gfr_ckd1',
            'format'=>'raw',  
            //'value'=>'<span style="color: red">'.$model->ingfr->result.'</span>',
            'label'=>'แปรผล Gfr_ckd',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Creatinine',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Creatinine1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->incr->result.'</span>',
            'label'=>'แปรผล Creatinine',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Bun',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Bun1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inbun->result.'</span>',
            'label'=>'แปรผล Bun',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'## การทำงานของตับ'.'</span>',
        'rowOptions'=>['class'=>'danger']
    ],
        [
        'columns' => [
        [
            'attribute'=>'Ast',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Ast1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inast->result.'</span>',
            'label'=>'แปรผล Ast',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Alt',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Alt1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inalt->result.'</span>',
            'label'=>'แปรผล Alt',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        
        
    [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'## ตรวจปัสสาวะ'.'</span>',
        'rowOptions'=>['class'=>'danger'],
        //'groupOptions'=>['class'=>'text-center']
    ],
       [
        'columns' => [
        [
            'attribute'=>'Urine_proteine_ua',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Urine_proteine_ua1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inpro->result.'</span>',
            'label'=>'แปรผล Urine_proteine',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ], 
        [
        'columns' => [
        [
            'attribute'=>'Urine_gluose_ua',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Urine_gluose_ua1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->insugar->result.'</span>',
            'label'=>'แปรผล Urine_gluose',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ], 
        
        [
        'columns' => [
        [
           'attribute'=>'Rbc_ua',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Rbc_ua1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inrbcua->result.'</span>',
            'label'=>'แปรผล Rbc_ua',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Wbc_ua',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Wbc_ua1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inwbcua->result.'</span>',
            'label'=>'แปรผล Wbc_ua',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
      
    [
        'group'=>true,
        'label'=>'<span style="color: blue">'.'## ตรวจอุจจาระ'.'</span>',
        'rowOptions'=>['class'=>'danger'],        
    ],
        
        [
        'columns' => [
        [
            'attribute'=>'Parasite',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Parasite1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inpara->result.'</span>',
            'label'=>'แปรผล Parasite',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
       ],
        [
        'columns' => [
        [
            'attribute'=>'Occountblood',
            'format'=>'raw',
            'valueColOptions'=>['style'=>'width:30%']
        ],
          [
            'attribute'=>'Occountblood1',
            'format'=>'raw',  
            'value'=>'<span style="color: red">'.$model->inocco->result.'</span>',
            'label'=>'แปรผล Occountblood',
            'valueColOptions'=>['style'=>'width:30%'],
            
            ],
            
         ]   
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


</div>
