<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\Pttype;
//use kartik\detail\DetailView;

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
<?= GridView::widget([
        'dataProvider' => $dataProvider,  
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],    
        'columns' => [
            [             
             'attribute'=>'Bw',
             'format'=> 'integer',  
             //'contentOptions' => ['class' => 'text-center']   
            ],            
            'Height',
            [             
             'attribute'=>'Waist',
             'format'=> 'integer',               
            ],
            'Clinic',
            'Drugallergy',  
            [             
             'attribute'=>'Drinking_type_id',
             'value'=> 'pdrink.drinking_type_name',  
            ],
            [             
             'attribute'=>'Smoking_type_id',
             'value'=> 'psmoke.smoking_type_name',
            ],
            
        ],
    ]); ?>
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
      
    <?= DetailView::widget([
        'model' => $model,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'attributes' => [
            [             
             'attribute'=>'Vstdate',
             'value'=> function($model){
                return DateThai($model->Vstdate);
             },
            ],
            
//            'Vn',
//            'Hn',
//            'Pt',
//            'Sex',
            //'Age_y',
            //'Pttype',
            //'Clinic',
           // 'Drugallergy',
            'Cc',
            'Pe',
            'Pdx',
//            'Height',
//            'Bw',
//            'Waist',  
            'bp',
//            'Bpd',
//            'Bps',
            //'Drinking_type_id',
            //'Smoking_type_id',
            'Bmi',        
//            'Hr',            
//            'Pulse',
//            'Temperature',
//            'Rr',
            'Fbs',
            
            'Tg',
//            'Hdl',
//            'Glucurine',
//            'Bun',
            'Creatinine',
            'Ua',
//            'Hba1c',
//            'Tc',
            'Ldl',
//            'Ast',
//            'Alt',
            'Cholesterol',
            'Gfr_ckd',
            'Hct_cbc',
            'Wbc_count_cbc',
            'Eo_cbc',
            'Urine_proteine_ua',
            'Urine_gluose_ua',
            'Rbc_ua',
            'Wbc_ua',
            'Parasite',
            'Occountblood',
            //'Dx_doctor',
            'Dname',
            //'ic_confirm',
            //'ic_insys',
        ],
    ]) ?>

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
