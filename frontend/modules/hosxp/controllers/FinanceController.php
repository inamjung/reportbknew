<?php

namespace frontend\modules\hosxp\controllers;
use yii;
use yii\data\ArrayDataProvider;

use yii\web\Controller;

/**
 * Default controller for the `hosxp` module
 */
class FinanceController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }


    public function actionFin1($date1=null,$date2=null)    {
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("select o.paidst,(select name from paidst where paidst=o.paidst) paidst_name
 ,sum(o.sum_price) as sum_price  from ovst v
 inner join opitemrece o on o.vn=v.vn
 where v.vstdate between '$date1' and '$date2'
 group by o.paidst order by o.paidst")->queryAll();      
        
        
        
        for ($i = 0; $i < sizeof($data); $i++) {
            $name[] = $data[$i]['paidst'];  
            $name[] = $data[$i]['paidst_name'];
            $name[] = $data[$i]['sum_price'];                         
        }
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        
        return $this->render('fin1',[
            'dataProvider'=>$dataProvider,            
            'date1'=>$date1,
            'date2'=>$date2,
          
            
        ]);
    }
    
    public function actionFin2($date1=null,$date2=null)    {
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("select o.paidst,(select name from paidst where paidst=o.paidst) paidst_name
 ,sum(o.sum_price) as sum_price  from ovst v
 inner join opitemrece o on o.an=v.an
 where v.vstdate between '$date1' and '$date2'
 group by o.paidst order by o.paidst")->queryAll();      
        
        
        
        for ($i = 0; $i < sizeof($data); $i++) {
            $name[] = $data[$i]['paidst'];  
            $name[] = $data[$i]['paidst_name'];
            $name[] = $data[$i]['sum_price'];                         
        }
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        
        return $this->render('fin2',[
            'dataProvider'=>$dataProvider,            
            'date1'=>$date1,
            'date2'=>$date2,
          
            
        ]);
    }
       
    
    
}
