<?php
//นายปริญญา ลอยพิมาย นวก.คอมพิวเตอร์ รพ.บึงกาฬ 
//รายงานที่ 1 (Report_ipd1) คือ ยอดจำหน่ายผู้ป่วย Sepsis IPD
//รายงานที่ 2 (Report_ipd2) คือ ยอด Admit ผู้ป่วย IPD 

namespace frontend\modules\hosxp\controllers;
use yii;
use yii\data\ArrayDataProvider;

use yii\web\Controller;

/**
 * Default controller for the `hosxp` module
 */
class IpdController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    
    public function actionIndex(){
        
        
        return $this->render('index');
    }
    
    public function actionReport_ipd1($ward=null,$date1=null,$date2=null)    {
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("SELECT a.ward,w.`name`,COUNT(DISTINCT a.hn) as hn,COUNT(DISTINCT a.an) as an 
FROM an_stat a
INNER JOIN ward w on w.ward=a.ward
WHERE a.dchdate BETWEEN '$date1' and '$date2' and a.ward='$ward' 
and ((a.pdx between 'A410' and 'A419' or a.pdx in ('R572') or a.pdx in ('R651'))
or (a.dx0 between 'A410' and 'A419' or a.dx0 in ('R572') or a.dx0 in ('R651'))
or (a.dx1 between 'A410' and 'A419' or a.dx1 in ('R572') or a.dx1 in ('R651'))
or (a.dx2 between 'A410' and 'A419' or a.dx2 in ('R572') or a.dx2 in ('R651'))
or (a.dx3 between 'A410' and 'A419' or a.dx3 in ('R572') or a.dx3 in ('R651'))
or (a.dx4 between 'A410' and 'A419' or a.dx4 in ('R572') or a.dx4 in ('R651'))
or (a.dx5 between 'A410' and 'A419' or a.dx5 in ('R572') or a.dx5 in ('R651')))    
GROUP BY a.ward")->queryAll();      
        
        
        
        for ($i = 0; $i < sizeof($data); $i++) {
            $name[] = $data[$i]['name'];  
            $name[] = $data[$i]['hn']*1;
            $name[] = $data[$i]['an']*1;                         
        }
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        
        return $this->render('report_ipd1',[
            'dataProvider'=>$dataProvider,  
            'ward'=>$ward,            
            'date1'=>$date1,
            'date2'=>$date2,
            //'name'=>$name,
            //'an'=>$an
            
        ]);
    }
    public function actionReport_ipd2($ward=null,$date1=null,$date2=null)    {
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("SELECT a.ward,w.`name`,COUNT(DISTINCT a.hn) as hn,COUNT(DISTINCT a.an) as an 
FROM an_stat a
INNER JOIN ward w on w.ward=a.ward
WHERE a.regdate BETWEEN '$date1' and '$date2' and a.ward='$ward'                
GROUP BY a.ward")->queryAll();      
        
        
        
        for ($i = 0; $i < sizeof($data); $i++) {
            $name[] = $data[$i]['name'];  
            $name[] = $data[$i]['hn']*1;
            $name[] = $data[$i]['an']*1;                         
        }
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        
        return $this->render('report_ipd2',[
            'dataProvider'=>$dataProvider,  
            'ward'=>$ward,            
            'date1'=>$date1,
            'date2'=>$date2,
            //'name'=>$name,
            //'an'=>$an
            
        ]);
    }
    
    public function actionIndivreport_ipd1($ward,$date1,$date2) {
        $sql="select a.ward,w.name,a.hn,a.an,concat(p.pname,p.fname,' ',p.lname) as person
from an_stat a
INNER JOIN patient p on p.hn=a.hn
INNER JOIN ward w on w.ward=a.ward
where a.dchdate between '$date1' and '$date2' and a.ward='$ward'   
and ((a.pdx between 'A410' and 'A419' or a.pdx in ('R572') or a.pdx in ('R651'))
or (a.dx0 between 'A410' and 'A419' or a.dx0 in ('R572') or a.dx0 in ('R651'))
or (a.dx1 between 'A410' and 'A419' or a.dx1 in ('R572') or a.dx1 in ('R651'))
or (a.dx2 between 'A410' and 'A419' or a.dx2 in ('R572') or a.dx2 in ('R651'))
or (a.dx3 between 'A410' and 'A419' or a.dx3 in ('R572') or a.dx3 in ('R651'))
or (a.dx4 between 'A410' and 'A419' or a.dx4 in ('R572') or a.dx4 in ('R651'))
or (a.dx5 between 'A410' and 'A419' or a.dx5 in ('R572') or a.dx5 in ('R651')))";
        
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$rawData           
        ]);
       return $this->render('indivreport_ipd1',[
            'dataProvider'=>$dataProvider,
           
            
        ]);
    }
    
    public function actionIndivreport_ipd2($ward,$date1,$date2) {
        $sql="SELECT a.ward,w.`name`,a.hn,a.an,concat(p.pname,p.fname,' ',p.lname) as person
FROM an_stat a
INNER JOIN patient p on p.hn=a.hn
INNER JOIN ward w on w.ward=a.ward
WHERE a.regdate BETWEEN '$date1' and '$date2' AND a.ward='$ward'    
GROUP BY a.an";
        
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$rawData           
        ]);
       return $this->render('indivreport_ipd2',[
            'dataProvider'=>$dataProvider, 
            
        ]);
    }
}
