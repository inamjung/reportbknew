<?php

use yii\helpers\Html;
use frontend\modules\bkhealth\models\Insys;
use frontend\modules\bkhealth\models\Inresult;
use frontend\modules\bkhealth\models\Resultlab;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>

    </style>
    <body>
        <div class="container" style="padding-left: 50px; font-size:16pt;">

       <img src="img/cdcswl.png" width="58" height="59" class="pull-left" style="padding-left: 5px;" >
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
                <strong style="font-size:21pt;">คำแนะนำผลการตรวจสุขภาพ</strong>
                <strong style="font-size:21pt;"><?= Yii::$app->name; ?></strong><p>
        </div> 
        
        <div style="padding-left: 50px; font-size:16pt;">วันที่ตรวจ&nbsp;&nbsp;&nbsp;<?= DateThai($model->Vstdate) ;?></div>
        <div style="padding-left: 50px; font-size:16pt;">HN : &nbsp;&nbsp;<b><?= $model->Hn ;?></b>
            &nbsp;&nbsp;&nbsp;ชื่อ
            <u><b><?= $model->Pt ;?></b></u>
        &nbsp;&nbsp;&nbsp;อายุ : 
        <?= $model->Age_y;?> ปี
        &nbsp;&nbsp;&nbsp;น้ำหนัก : 
        <?= $model->insyses->Bw;?> กก.
        &nbsp;&nbsp;&nbsp;ส่วนสูง : 
        <?= $model->insyses->Height;?> ซม.
        </div>
        <div style="padding-left: 50px; font-size:16pt;">
            __________________________________________________________________________________________ 
        </div>     
           
              <div style="padding-left: 50px; font-size:16pt;">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <b>BMI : <u><?= $model->Bmi;?>&nbsp;&nbsp;=>
                          <?= $model->inbmi->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                  <?= $model->inbmi->consult;?>
                  <?php // Html::img('icpics/'.$model->inbmi->picconsult,['class'=>'thumbnail img-responsive center'])?>
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <b>รอบเอว : <u><?= $model->Waist;?>&nbsp;&nbsp;=>
                          <?= $model->inwaist->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->inwaist->consult;?>
                  
                  
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <b>ความดันโลหิต : <u><?= $model->insyses->bp1;?>&nbsp;&nbsp;=>
                          <?= $model->inbp->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->inbp->consult;?>
                  
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <b>ระดับน้ำตาลในเลือด : <u><?= $model->Fbs;?>&nbsp;&nbsp;=>
                          <?= $model->infbs->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->infbs->consult;?> 
                  
                 
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <b>ระดับไขมันในเลือด</b>  <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <b>- ไขมันโคเรสเตอรอล : 
                      <u><?= $model->Cholesterol;?>&nbsp;&nbsp;=>
                          <?= $model->incho->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->incho->consult;?>
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <b>- ไขมันไตรกรีเซอไรด์ : 
                      <u><?= $model->Tg;?>&nbsp;&nbsp;=>
                          <?= $model->intg->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->intg->consult;?>    
                  
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;                  
                  <b>ความสมบูรณ์ของเลือด</b>  <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <b>- เม็ดเลือดแดง : 
                      <u><?= $model->Hct_cbc;?>&nbsp;&nbsp;=>
                          <?= $model->inhct->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->inhct->consult;?>    
                  <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <b>- เม็ดเลือดขาว : 
                      <u><?= $model->Wbc_count_cbc;?>&nbsp;&nbsp;=>
                          <?= $model->inwbccbc->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->inwbccbc->consult;?>
                  <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <b>- พยาธิ : 
                      <u><?= $model->Eo_cbc;?>&nbsp;&nbsp;=>
                          <?= $model->ineo->result;?></u></b>
                  &nbsp;&nbsp;&nbsp;&nbsp;<i>คำแนะนำ :</i>
                          <?= $model->ineo->consult;?>
              </div>
        
        <div  style="padding-left: 80px;">
            <img src="icpics/321.png" width="610" height="480" class="pull-left" style="padding-left: 5px;" >
        </div>
        
                
        </div>
    </body>
</html>
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
       // echo DateThai(date('Y-m-d'));
?>
<?php

function DateThaiLong($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธํนวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		//$strYear=substr($strYear,2,2);
		return "$strDay $strMonthThai $strYear";
	}
       // echo DateThai(date('Y-m-d'));
?>


<?php
function thainumDigit($num){
    return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
    array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
    $num);
};
?>



