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
        
<div class="container" style="padding-left: 5px; font-size:16pt;">
<img src="img/cdcswl.png" width="58" height="59" class="pull-left" >
        
<strong style="font-size:21pt;">ผลตรวจทางห้องปฏิบัติการ &nbsp;&nbsp;&nbsp;<?= Yii::$app->name; ?></strong>
</div>      
        <div style="padding-left: 15px; font-size:16pt;">
            วันที่ตรวจ&nbsp;&nbsp;&nbsp;<b><?= DateThai($model->Vstdate) ;?></b>
        &nbsp;&nbsp;&nbsp;HN : &nbsp;&nbsp;<b><?= $model->Hn ;?>
        </div>
        <div style="padding-left: 15px; font-size:16pt;"></b>
            ชื่อ
            <u><b><?= $model->Pt ;?></b></u>
        &nbsp;&nbsp;&nbsp;อายุ : 
        <b><?= $model->Age_y;?></b> ปี<br>
        น้ำหนัก : 
        <?= $model->insyses->Bw;?> กก.
        &nbsp;&nbsp;&nbsp;ส่วนสูง : 
        <?= $model->insyses->Height;?> ซม.
        &nbsp;&nbsp;&nbsp;BMI : 
        <?= $model->Bmi;?>
        &nbsp;&nbsp;&nbsp;BP : 
        <?= $model->insyses->bp1;?>
        </div>
           
        <table class="table" style="font-size:14pt;" border="1" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <td>#</td>
                    <td style="width: 100px; text-align: center">สิ่งที่ต้องการทราบ</td>
                    <td style="width: 75px; text-align: center">สิ่งที่ตรวจ</td>
                    <td style="width: 75px; text-align: center">ค่าปกติ</td>
                    <td style="width: 75px; text-align: center; color: blue">ผลตรวจ</td>
                    <td style="width: 75px; text-align: center; color: red">แปรผล</td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    
                    <td>#</td>
                    <td style="width: 100px; text-align: center">สิ่งที่ต้องการทราบ</td>
                    <td style="width: 100px; text-align: center">สิ่งที่ตรวจ</td>
                    <td style="width: 75px; text-align: center">ค่าปกติ</td>
                    <td style="width: 75px; text-align: center; color: blue">ผลตรวจ</td>
                    <td style="width: 75px; text-align: center; color: red">แปรผล</td>
                    
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center">เบาหวาน</td>
                    <td style="width: 75px; text-align: center">Glucose</td>
                    <td style="width: 75px; text-align: center"><?= $model->infbs->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Fbs;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->infbs->result;?></td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center">ตรวจปัสสาวะ</td>
                    <td style="width: 75px; text-align: center">Urine Proteine</td>
                    <td style="width: 75px; text-align: center"><?= $model->inpro->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Urine_proteine_ua;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inpro->result;?></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center">การทำงานของไต</td>
                    <td style="width: 75px; text-align: center">Bun</td>
                    <td style="width: 75px; text-align: center"><?= $model->inbun->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Bun;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inbun->result;?></td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Urine Glucose</td>
                    <td style="width: 75px; text-align: center"><?= $model->insugar->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Urine_gluose_ua;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->insugar->result;?></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Creatinine</td>
                    <td style="width: 75px; text-align: center"><?= $model->incr->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Creatinine;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->incr->result;?></td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Rbc Ua</td>
                    <td style="width: 75px; text-align: center"><?= $model->inrbcua->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Rbc_ua;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inrbcua->result;?></td>
                
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center">ภาวะเสี่ยงโรคเกาต์</td>
                    <td style="width: 75px; text-align: center">Uric Acid</td>
                    <td style="width: 75px; text-align: center"><?= $model->inuric->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Uric;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inuric->result;?></td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Wbc Ua</td>
                    <td style="width: 75px; text-align: center"><?= $model->inwbcua->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Wbc_ua;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inwbcua->result;?></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center">การทำงานของตับ</td>
                    <td style="width: 75px; text-align: center">AST</td>
                    <td style="width: 75px; text-align: center"><?= $model->inast->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Ast;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inast->result;?></td>
                
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center">ความสมบูรณ์ของเลือด</td>
                    <td style="width: 75px; text-align: center">Hct</td>
                    <td style="width: 75px; text-align: center"><?= $model->inhct->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Hct_cbc;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inhct->result;?></td>
                
                
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">ALT</td>
                    <td style="width: 75px; text-align: center"><?= $model->inalt->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Alt;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inalt->result;?></td>
                
                   <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Wbc count</td>
                    <td style="width: 75px; text-align: center"><?= $model->inwbccbc->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Wbc_count_cbc;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inwbccbc->result;?></td>
                
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center">ไขมันเลือด</td>
                    <td style="width: 75px; text-align: center">Cholesterol</td>
                    <td style="width: 75px; text-align: center"><?= $model->incho->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Cholesterol;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->incho->result;?></td>
                
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Eos</td>
                    <td style="width: 75px; text-align: center"><?= $model->ineo->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Eo_cbc;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->ineo->result;?></td>
                
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Triglyceride</td>
                    <td style="width: 75px; text-align: center"><?= $model->intg->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Tg;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->intg->result;?></td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center">ตรวจอุจจาระ</td>
                    <td style="width: 75px; text-align: center">Parasite</td>
                    <td style="width: 75px; text-align: center"><?= $model->inpara->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Parasite;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inpara->result;?></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">HDL</td>
                    <td style="width: 75px; text-align: center"><?= $model->inhdl->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Hdl;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inhdl->result;?></td>
                
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">Occountblood</td>
                    <td style="width: 75px; text-align: center"><?= $model->inocco->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Occountblood;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inocco->result;?></td>
                
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 100px; text-align: center"></td>
                    <td style="width: 75px; text-align: center">LDL</td>
                    <td style="width: 75px; text-align: center"><?= $model->inldl->default;?></td>
                    <td style="width: 75px; text-align: center; color: blue"><?= $model->Ldl;?></td>
                    <td style="width: 75px; text-align: center; color: red"><?= $model->inldl->result;?></td>
                    
                    <td style="width: 100px; text-align: center"></td>
                    <td></td>
                    <td style="width: 100px; text-align: center">ผลการเอกซเรย์</td>
                    <td style="width: 75px; text-align: center">Xray</td>
                    <td style="width: 75px; text-align: center"></td>
                    <td style="width: 75px; text-align: center; color: blue"></td>
                    <td style="width: 75px; text-align: center; color: red"></td>
                
                </tr>
              
            </tbody>
            
            
        </table>
            
        <div style="padding-left: 10px; font-size:16pt;">
         ความเห็นแพทย์ [ ] ปกติ  [ ] ไม่ปกติ
        </div>
        <div style="padding-left: 10px; font-size:16pt;">
            คำแนะนำ / การรักษา...........................................................................................<br>
            ...............................................................
            ...............................................................
        </div>
       
        <div style="padding-left: 200px; font-size: 16pt;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ลงชื่อ.........................................<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            (.............................................)<br>
            ตำแหน่ง............................................
        </div>
      
      
        
    </body>
</html>

<?Php
    $html = ob_get_contents();
    ob_end_clean();
    $pdf = new mPDF('th', 'A4-L', '0', 'THSaraban');

    $pdf->SetDisplayMode('fullpage');
    $pdf->WriteHTML($html, 2);
    $pdf->Output();
?>
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



