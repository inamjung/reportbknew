<?php

namespace frontend\modules\bkhealth\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class HealthhosController extends Controller
{
    public function actionHosvisit($hn=null){
        
        $sql="select v.vstdate,v.vn ,p.hn,CONCAT(p.pname,p.fname,'  ',p.lname) as pt
,p.sex,v.age_y,p.pttype,p.clinic,p.drugallergy
,v.pdx,o.height,o.bw,o.waist,o.cc,o.bpd,o.bps,o.drinking_type_id,o.smoking_type_id
,o.hr,o.pe,o.pulse,o.temperature,o.rr,o.fbs
,o.bmi,o.tg,o.hdl,o.glucurine,o.bun,o.creatinine,o.ua,o.hba1c,o.tc,o.ldl,o.ast,o.alt,o.cholesterol
,pg.gfr_ckd,ptt.name as pttname
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='4' and lh.vn=v.vn) as hct_cbc
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='5' and lh.vn=v.vn) as wbc_count_cbc
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='21' and lh.vn=v.vn) as eo_cbc
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='279' and lh.vn=v.vn) as urine_proteine_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='275' and lh.vn=v.vn) as urine_gluose_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='289' and lh.vn=v.vn) as rbc_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='293' and lh.vn=v.vn) as wbc_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='213' and lh.vn=v.vn) as parasite
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='212' and lh.vn=v.vn) as occountblood
,v.dx_doctor
,(select name from doctor where code=v.dx_doctor)as dname
from vn_stat v
inner join opdscreen o on o.vn=v.vn
inner join patient p on p.hn=v.hn
inner join patient_hospital_officer ph on ph.hn=v.hn
left outer join pcrh_gfr pg on pg.hn=v.hn
left outer join pttype ptt on ptt.pttype=p.pttype
where  p.hn='$hn'
and ph.is_officer='Y'
and v.dx_doctor  is not null
group by v.vn order by v.vn desc limit 30";
        
         try{
            $rawData = Yii::$app->db2->createCommand($sql)->queryAll();
        }  catch (\yii\db\Exception $e){
            throw new \yii\web\ConflictHttpException('sql error');
        }
        
        if( !empty($rawData[0])){
            $cols = array_keys($rawData[0]);
            
        }
       
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$rawData, 
                'sort'=> !empty($cols) ? ['attributes'=> $cols] : FALSE,
                'pagination'=>FALSE
            ]);
        
        return $this->render('hosvisit',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
//            'date1'=>$date1,
//            'date2'=>$date2,
            'hn'=>$hn
            
        ]);
    }
    public function actionInsertsys($Vstdate=null,$Vn=null,$Hn=null,$Pt=null,$Sex=null,$Age_y=null,$Pttype=null
            ,$Clinic=null,$Drugallergy=null,$Pdx=null,$Height=null,$Bw=null,$Waist=null,$Cc=null,$Bpd=null,$Bps=null
            ,$Drinking_type_id=null,$Smoking_type_id=null,$Hr=null,$Pe=null,$Pluse=null,$Temperature=null,$Rr=null
            ,$Fbs=null,$Bmi=null,$Tg=null,$Hdl=null,$Glucurine=null,$Bun=null,$Creatinine=null
            ,$Ua=null,$Hba1c=null,$Tc=null,$Ldl=null,$Ast=null,$Alt=null,$Cholesterol=null
            ,$Gfr_ckd=null,$Hct_cbc=null,$Wbc_count_cbc=null,$Eo_cbc=null,$Urine_proteine_ua=null,$Urine_gluose_ua=null
            ,$Rbc_ua=null,$Wbc_ua=null,$Parasite=null,$Occountblood=null,$Dx_doctor=null
            ,$Dname=null,$ic_confirm=null,$ic_insys=null)
        {
        
        $sys = new \frontend\modules\bkhealth\models\Insys();
        
        $sys->Vstdate = $Vstdate;
        $sys->Vn = $Vn;
        $sys->Hn = $Hn;
        $sys->Pt = $Pt;
        $sys->Sex = $Sex;
        $sys->Age_y = $Age_y;
        $sys->Pttype = $Pttype;
        $sys->Clinic = $Clinic;
        $sys->Drugallergy = $Drugallergy;
        $sys->Pdx = $Pdx;
        $sys->Height = $Height;
        $sys->Bw = $Bw;
        $sys->Waist = $Waist;
        $sys->Cc = $Cc;
        $sys->Bpd = $Bpd;
        $sys->Bps = $Bps; 
        $sys->Drinking_type_id =$Drinking_type_id;
        $sys->Smoking_type_id = $Smoking_type_id;
        $sys->Hr = $Hr;
        $sys->Pe = $Pe;
        $sys->Pulse = $Pluse;
        $sys->Temperature = $Temperature;        
        $sys->Rr = $Rr;
        $sys->Fbs = $Fbs;
        $sys->Bmi = $Bmi;
        $sys->Tg = $Tg;
        $sys->Hdl = $Hdl;
        $sys->Glucurine = $Glucurine;
        $sys->Bun = $Bun;
        $sys->Creatinine = $Creatinine;
        $sys->Ua = $Ua;
        $sys->Hba1c = $Hba1c;
        $sys->Tc = $Tc;
        $sys->Ldl = $Ldl;
        $sys->Ast = $Ast;
        $sys->Alt = $Alt;
        $sys->Cholesterol = $Cholesterol;        
        $sys->Gfr_ckd = $Gfr_ckd;        
        $sys->Hct_cbc = $Hct_cbc;
        $sys->Wbc_count_cbc = $Wbc_count_cbc;
        $sys->Eo_cbc = $Eo_cbc;
        $sys->Urine_proteine_ua = $Urine_proteine_ua;
        $sys->Urine_gluose_ua = $Urine_gluose_ua;
        $sys->Rbc_ua = $Rbc_ua;
        $sys->Wbc_ua = $Wbc_ua;
        $sys->Parasite = $Parasite;
        $sys->Occountblood = $Occountblood;        
        $sys->Dx_doctor = $Dx_doctor;
        $sys->Dname = $Dname;        
        $sys->ic_confirm = 1;
        $sys->ic_insys = 1;        
        $sys->save();
        
    }
    
}
