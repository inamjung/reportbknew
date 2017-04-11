<?php

namespace frontend\modules\hosxp\controllers;

use yii\web\Controller;
use yii;
use yii\data\ArrayDataProvider;

class PharController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    
        public function actionReport03($date1=null,$date2=null) {

        $connection = Yii::$app->db2;
        $data = $connection->createCommand("select d.name,d.strength,d.units,count(o.icode) as count_icode,count(distinct o.hn) as hn_count,
sum(o.qty) as sum_qty,ROUND(sum(o.sum_price),2) as sum_price,o.icode,
count(distinct o.order_no) as count_order_no,
sum(if(o.pttype in('21','20'),(select count(distinct order_no) from opitemrece where pttype in('21','20') and hos_guid=o.hos_guid),0)) as mon1,
sum(if(o.pttype='10',(select count(distinct order_no) from opitemrece where pttype=10 and hos_guid=o.hos_guid),0)) as mon2,
sum(if(o.pttype='34',(select count(distinct order_no) from opitemrece where pttype=34 and hos_guid=o.hos_guid),0)) as mon3,
sum(if(o.pttype not in('21','10','34'),(select count(distinct order_no)
from opitemrece where pttype not in('21','20','10','34') and hos_guid=o.hos_guid),0)) as mon4
from opitemrece o
left outer join drugitems d on d.icode = o.icode
where 
o.rxdate between '$date1' and '$date2'
and  o.income in('03','17')  and o.an is not null and o.an <> ''
group by d.name,d.strength,d.units
order by sum_price desc limit 20 ")->queryAll();


        for ($i = 0; $i < sizeof($data); $i++) {
            $name[] = $data[$i]['name'];
       //     $total[] = $data[$i]['total'] * 1;
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);

        return $this->render('report03', [
                    'dataProvider' => $dataProvider,
                    //'clinic' => $clinic,
                    //'name' => $name,
                    //'icd10' => $icd10
                    //'units'=>$units,
                    //'qty'=>$qty
                    'date1'=>$date1,
                    'date2'=>$date2
        ]);
    }





}