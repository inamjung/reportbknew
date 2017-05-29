<?php

namespace frontend\modules\labonline\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class LabbydateController extends Controller
{
    public function actionLabvisit($cid=null){
        
        $sql=" select concat(p.fname,' ',p.lname) pt_name, h.order_date,h.lab_order_number from lab_head h ,patient p
            where  p.hn=h.hn and p.cid='$cid'
            order by h.order_date desc
            limit 15";
        
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
        //$dataProvider->refresh();
        return $this->render('labvisit',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
            'cid'=>$cid
            
        ]);
    }
    
    public function actionIndivlabvisit($cid=null,$lab_order_number=null){
        
        $sql="select l.* ,o.name as staff_name,i.*
            from lab_order l
            left outer join lab_items i on i.lab_items_code = l.lab_items_code
            left outer join opduser o on o.loginname = l.staff
            where l.lab_order_number = '$lab_order_number' and l.confirm='Y'
            order by i.display_order,i.lab_items_name";
        
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
        
        return $this->renderAjax('indivlabvisit',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
            'cid'=>$cid,
            'lab_order_number'=>$lab_order_number
            
        ]);
    }
    
}
