<?php

namespace frontend\modules\hosxp\controllers;

use yii\web\Controller;
use yii;
use yii\data\ArrayDataProvider;


class TtmreportController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(){
        
        return $this->render('index');
    }
    public function actionTtmreport($date1=null,$date2=null,$heal=null)
    {
        
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("select h1.service_date date,h1.service_time time,h1.hn hn,h1.an,
                concat(p.pname,p.fname,'  ',p.lname) as cname,h2.health_med_doctor_name,
h4.health_med_operation_item_name heal,h5.health_med_provider_full_name pname 
from health_med_service_operation h3
left outer join health_med_service  h1 on h3.health_med_service_id=h1.health_med_service_id
left outer join patient p on h1.hn=p.hn
left outer join health_med_doctor h2 on h2.health_med_doctor_id=h1.health_med_doctor_id
left outer join health_med_operation_item h4 on h4.health_med_operation_item_id=h3.health_med_operation_item_id
left outer join health_med_provider h5 on h5.health_med_provider_id=h3.health_med_provider_id
where h1.service_date between '$date1' and '$date2'
group by hn,service_time
ORDER BY service_date") ->queryAll();
        
        
        for ($i = 0; $i < sizeof($data); $i++) {
                        $pname[] = $data[$i]['pname'];
            $time[] = $data[$i]['time'];
            $date[] = $data[$i]['date'];
           // $heal[] = $data[$i]['heal'];
            $hn[] = $data[$i]['hn'];
            $heal[] = $data[$i]['heal']*1;             
        }
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        
        return $this->render('ttmreport',[
            'data'=>$data,
            'dataProvider'=>$dataProvider,  
            'date1'=> $date1,
            'date2'=> $date2,
            'heal'=> $heal
            
        ]);
    }
    
        public function actionTtmindivreport($heal=null,$date1=null,$date2=null){
        
        $sql="select h1.service_date date,h1.service_time time,h1.hn hn,h1.an,
                concat(p.pname,p.fname,'  ',p.lname) as cname,h2.health_med_doctor_name,
h4.health_med_operation_item_name heal,h4.health_med_operation_item_id,h5.health_med_provider_full_name pname 
from health_med_service_operation h3
left outer join health_med_service  h1 on h3.health_med_service_id=h1.health_med_service_id
left outer join patient p on h1.hn=p.hn
left outer join health_med_doctor h2 on h2.health_med_doctor_id=h1.health_med_doctor_id
left outer join health_med_operation_item h4 on h4.health_med_operation_item_id=h3.health_med_operation_item_id
left outer join health_med_provider h5 on h5.health_med_provider_id=h3.health_med_provider_id
where  h1.service_date between '$date1' and '$date2' and h4.health_med_operation_item_name='$heal'
group by hn,service_time
ORDER BY service_date";
        
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$rawData           
        ]);
        
        
         return $this->render('ttmindivreport',[
            'dataProvider'=>$dataProvider, 
            // 'ttm'=>$ttm,
             'sql'=>$sql,
            'heal'=>$heal,
//            'date1'=>$date1,
//            'date2'=>$date2,
          
            //'total'=>$total
            
        ]);
    }
    

}