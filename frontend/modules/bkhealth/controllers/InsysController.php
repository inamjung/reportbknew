<?php

namespace frontend\modules\bkhealth\controllers;

use Yii;
use frontend\modules\bkhealth\models\Insys;
use frontend\modules\bkhealth\models\InsysSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use kartik\mpdf\Pdf;

/**
 * InsysController implements the CRUD actions for Insys model.
 */
class InsysController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Insys models.
     * @return mixed
     */
    public function actionIndex()
    {
        $SexearchModel = new InsysSearch();
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query'=> Insys::find()->orderBy('Vstdate desc')
        ]);

        return $this->render('index', [
            'searchModel' => $SexearchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionInresult()
    {
        $SexearchModel = new InsysSearch();
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query'=> Insys::find()->orderBy('Vstdate desc')
        ]);
        

        return $this->render('inresult', [
            'searchModel' => $SexearchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Insys model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
        
    }

    /**
     * Creates a new Insys model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Insys();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Vn]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Insys model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/bkhealth/inresult/view', 'id' => $model->Vn]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Insys model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Insys model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Insys the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Insys::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    public function actionInsertresult($Vstdate=null,$Cid=null,$Vn=null,$Hn=null,$Pt=null,$Age_y=null,$Sex=null
            ,$Cc=null,$Waist=null,$Fbs=null,$Bmi=null,$Bmi1=null,$Tg=null,$Tg1=null,$Hdl=null,$Hdl1=null,$Creatinine=null,$Creatinine1=null
            ,$Tc=null,$Tc1=null,$Ldl=null,$Ldl1=null,$Cholesterol=null,$Cholesterol1=null ,$Gfr_ckd=null,$Hct_cbc=null,$Hct_cbc1=null
            ,$Wbc_count_cbc=null,$Wbc_count_cbc1=null,$Eo_cbc=null,$Eo_cbc1=null,$Urine_proteine_ua=null,$Urine_proteine_ua1=null,$Urine_gluose_ua=null,$Urine_gluose_ua1=null
            ,$Bun=null,$Bun1=null,$Uric=null,$Uric1=null,$Bp=null,$Bp1=null,$Ast=null,$Ast1=null,$Alt=null,$Alt1=null
            ,$Parasite=null,$Occountblood=null,$Parasite1=null,$Occountblood1=null,$Rbc_ua=null,$Wbc_ua=null,$Rbc_ua1=null,$Wbc_ua1=null
            ,$ic_confirm=null,$ic_insys=null,$ic_report=null)
        {
        
        $result = new \frontend\modules\bkhealth\models\Inresult();
        
        $result->Vstdate = $Vstdate;
        $result->Cid = $Cid;
        $result->Vn = $Vn;
        $result->Hn = $Hn;
        $result->Pt = $Pt;       
        $result->Age_y = $Age_y;
        $result->Sex = $Sex;
        $result->Cc = $Cc;
        $result->Bp = $Bp;
        $result->Waist = $Waist;
        $result->Fbs = $Fbs;
        $result->Bmi = $Bmi;
        $result->Tg = $Tg;
        $result->Hdl = $Hdl;
        $result->Creatinine = $Creatinine;       
        $result->Ldl = $Ldl;
        $result->Cholesterol = $Cholesterol;        
        $result->Gfr_ckd = $Gfr_ckd; 
        $result->Hct_cbc = $Hct_cbc;
        $result->Wbc_count_cbc = $Wbc_count_cbc;
        $result->Eo_cbc = $Eo_cbc;
        $result->Urine_proteine_ua = $Urine_proteine_ua;
        $result->Urine_gluose_ua = $Urine_gluose_ua;
        $result->Uric = $Uric;
        $result->Ast = $Ast;
        $result->Alt = $Alt;
        $result->Parasite = $Parasite;
        $result->Occountblood = $Occountblood;
        $result->Parasite = $Parasite;
        $result->Occountblood = $Occountblood;
        $result->Rbc_ua = $Rbc_ua;
        $result->Wbc_ua = $Wbc_ua;
        $result->ic_confirm = 1;
        $result->ic_insys = 1;    
        $result->ic_report =1;
        
            if ($Bmi >= 30) {
                    $result->Bmi1 ='bmi05';                    
                }else if ($Bmi >= 25 && $Bmi < 30) {
                    $result->Bmi1 ='bmi04';                   
                }else if ($Bmi >= 23 && $Bmi < 25) {
                    $result->Bmi1 ='bmi03';                           
                }else if ($Bmi >= 18.500 && $Bmi < 23) {
                    $result->Bmi1 ='bmi02';                    
                }else if ($Bmi > 0 && $Bmi < 18.500) {
                    $result->Bmi1 ='bmi01';                    
                }else if ($Bmi == '') {
                    $result->Bmi1 ='bmi00';                    
                }
                
            if ($Waist >= 90 && $Sex==1) {                    
                    $result->Waist1 ='waist022';                   
                }else if ($Waist >= 80 && $Sex==2) {                   
                    $result->Waist1 ='waist02';                    
                }                
                else if ($Waist > 0 && $Waist < 90 && $Sex==1) {                   
                    $result->Waist1 ='waist011';                   
                }
                else if ($Waist > 0 && $Waist < 80 && $Sex==2) {                  
                    $result->Waist1 ='waist01';                   
                }               
                else if ($Waist == 0 && $Sex==1) {                    
                    $result->Waist1 ='waist00';                    
                }
                else if ($Waist == 0 && $Sex==2) {                    
                    $result->Waist1 ='waist00';                   
                }     
                
                if ($Fbs >= 126) {
                    $result->Fbs1 ='fbs03';                    
                }else if ($Fbs >= 100 && $Fbs < 126 ) {
                    $result->Fbs1 ='fbs02';                    
                }else if ($Fbs > 0 && $Fbs < 100) {
                    $result->Fbs1 ='fbs01';                    
                }else if ($Fbs <= 0) {
                    $result->Fbs1 ='fbs00';                    
                }
                
                if ($Tg >= 200) {
                    $result->Tg1 ='tg03';                    
                }else if ($Tg >= 150 && $Tg <200) {
                    $result->Tg1 ='tg02';                    
                }else if ($Tg > 0 && $Tg < 150) {
                    $result->Tg1 ='tg01';                    
                }else if ($Tg <= 0) {
                    $result->Tg1 ='tg00';                    
                }
                
                if ($Hdl >= 60) {
                    $result->Hdl1 ='hdl03';                    
                }else if ($Hdl >= 40 && $Hdl < 60) {
                    $result->Hdl1 ='hdl02';                    
                }else if ($Hdl > 0 && $Hdl < 40) {
                    $result->Hdl1 ='hdl01';                    
                }else if ($Hdl <= 0) {
                    $result->Hdl1 ='hdl00';
                }
                
               if ($Creatinine >= 1.5) {
                    $result->Creatinine1 ='cr02';                    
                }else if ($Creatinine > 0 && $Creatinine < 1.5) {
                    $result->Creatinine1 ='cr01';                   
                }else if ($Creatinine <= 0) {
                    $result->Creatinine1 ='cr00';                   
                } 
                
                if ($Cholesterol >= 240) {
                    $result->Cholesterol1 ='cho03';                    
                }else if ($Cholesterol >= 200 && $Cholesterol < 240) {
                    $result->Cholesterol1 ='cho02';                    
                }else if ($Cholesterol > 0 && $Cholesterol < 200) {
                    $result->Cholesterol1 ='cho01';                    
                }else if ($Cholesterol <= 0) {
                    $result->Cholesterol1 ='cho00';                    
                }
                
                if ($Ldl >= 190) {
                    $result->Ldl1 ='ldl04';                    
                }else if ($Ldl >= 160 && $Ldl < 190) {
                    $result->Ldl1 ='ldl03';                    
                 }else if ($Ldl >= 130 && $Ldl < 160) {
                    $result->Ldl1 ='ldl02';                   
                }else if ($Ldl > 0 && $Ldl < 130) {
                    $result->Ldl1 ='ldl01';                    
                }else if ($Ldl <= 0) {
                    $result->Ldl1 ='ldl00';                    
                }
                
                if ($Uric >=7.7) {
                    $result->Uric1 ='uric02';                    
                }else if ($Uric >= 2.5 && $Uric < 7.7) {
                    $result->Uric1 ='uric01';                    
                 }else if ($Uric > 0 && $Uric < 2.5) {
                    $result->Uric1 ='uric03';                    
                 }else if ($Uric <= 0) {
                    $result->Uric1 ='uric00';                    
                 }
                 
                 if ($Bun >=24) {
                    $result->Bun1 ='bun03';                    
                }else if ($Bun >= 7 && $Bun < 24) {
                    $result->Bun1 ='bun02';                    
                 }else if ($Bun > 0 && $Bun < 7) {
                    $result->Bun1 ='bun01';                    
                 }else if ($Bun <= 0) {
                    $result->Bun1 ='bun00';                    
                 }
                 
                 if ($Urine_proteine_ua == 'Negative') {
                    $result->Urine_proteine_ua1 ='upro01';                    
                }else if ($Urine_proteine_ua =='Trace') {
                    $result->Urine_proteine_ua1 ='upro02';                                     
                 }
                else if ($Urine_proteine_ua =='1+') {
                    $result->Urine_proteine_ua1 ='upro03';  
                 }else if ($Urine_proteine_ua =='2+') {
                    $result->Urine_proteine_ua1 ='upro04'; 
                 }else if ($Urine_proteine_ua =='3+') {
                    $result->Urine_proteine_ua1 ='upro05';                                       
                 }
                 else if ($Urine_proteine_ua == '') {
                    $result->Urine_proteine_ua1 ='upro00';                    
                 }
                 
                 if ($Urine_gluose_ua == 'Negative') {
                    $result->Urine_gluose_ua1 ='usugar01';                    
                }else if ($Urine_gluose_ua =='1+') {
                    $result->Urine_gluose_ua1 ='usugar02'; 
                 }else if ($Urine_gluose_ua =='2+') {
                    $result->Urine_gluose_ua1 ='usugar03'; 
                 }else if ($Urine_gluose_ua =='3+') {
                    $result->Urine_gluose_ua1 ='usugar04';                                  
                 }
                 else if ($Urine_gluose_ua == '') {
                    $result->Urine_gluose_ua1 ='usugar00';                   
                 }
                 
                  if ($Bp >= 14090) {
                    $result->Bp1 ='bp03';                    
                }else if ($Bp >= 12080 && $Bp <=13989) {
                    $result->Bp1 ='bp02'; 
                 }else if ($Bp > 0 && $Bp <=11979) {
                    $result->Bp1 ='bp01'; 
                 }else if ($Bp == '') {
                    $result->Bp1 ='bp00'; 
                 }
                 
                 if ($Ast >= 35) {
                    $result->Ast1 ='ast02';                    
                }else if ($Ast > 0 && $Ast <35) {
                    $result->Ast1 ='ast01'; 
                 }else if ($Ast == '') {
                    $result->Ast1 ='ast00'; 
                 }
                 
                 if ($Alt >= 41) {
                    $result->Alt1 ='alt02';                    
                }else if ($Alt > 0 && $Alt <41) {
                    $result->Alt1 ='alt01'; 
                 }else if ($Alt == '') {
                    $result->Alt1 ='alt00'; 
                 }
                 
                 if ($Hct_cbc >= 48) {
                    $result->Hct_cbc1 ='hct01';                    
                }else if ($Hct_cbc >= 37 && $Hct_cbc <48) {
                    $result->Hct_cbc1 ='hct02'; 
                 }else if ($Hct_cbc > 0 && $Hct_cbc < 37) {
                    $result->Hct_cbc1 ='hct03'; 
                 }else if ($Hct_cbc == '') {
                    $result->Hct_cbc1 ='hct00'; 
                 }
                 
                 if ($Wbc_count_cbc >= 10000) {
                    $result->Wbc_count_cbc1 ='wbccbc01';                    
                }else if ($Wbc_count_cbc >= 5000 && $Wbc_count_cbc <10000) {
                    $result->Wbc_count_cbc1 ='wbccbc02'; 
                 }else if ($Wbc_count_cbc > 0 && $Wbc_count_cbc < 5000) {
                    $result->Wbc_count_cbc1 ='wbccbc03'; 
                 }else if ($Wbc_count_cbc == '') {
                    $result->Wbc_count_cbc1 ='wbccbc00'; 
                 }
                 
                 if ($Eo_cbc >= 3) {
                    $result->Eo_cbc1 ='eo01';                    
                }else if ($Eo_cbc >= 1 && $Eo_cbc <3) {
                    $result->Eo_cbc1 ='eo02'; 
                 }else if ($Eo_cbc > 0 && $Eo_cbc < 1) {
                    $result->Eo_cbc1 ='eo03'; 
                 }else if ($Eo_cbc == '') {
                    $result->Eo_cbc1 ='eo00'; 
                 }
                 
                 if ($Parasite == 'Not found') {
                    $result->Parasite1 ='para01';                    
                }else if ($Parasite === 'Not found' ) {
                    $result->Parasite1 ='para02'; 
                 }
                 else if ($Parasite == '' ) {
                    $result->Parasite1 ='para00'; 
                 }
                 
                 if ($Occountblood == 'Not found') {
                    $result->Occountblood1 ='occo01';                    
                }else if ($Occountblood === 'Not found' ) {
                    $result->Occountblood1 ='occo02'; 
                 }else if ($Occountblood == '' ) {
                    $result->Occountblood1 ='occo00'; 
                 }
                 
                 if ($Rbc_ua == 'Negative') {
                    $result->Rbc_ua1 ='rbcua01';                    
                }else if ($Rbc_ua == '0-1' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '1-2' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '2-3' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '3-5' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '5-10' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '10-20' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '20-30' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '30-50' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '50-100' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '100-200' ) {
                    $result->Rbc_ua1 ='rbcua02'; 
                 }else if ($Rbc_ua == '-' ) {
                    $result->Rbc_ua1 ='rbcua03'; 
                 }else if ($Rbc_ua == '' ) {
                    $result->Rbc_ua1 ='rbcua00'; 
                 }
                 
                 if ($Wbc_ua == 'Negative') {
                    $result->Wbc_ua1 ='wbcua01';                    
                }else if ($Wbc_ua == '0-1') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '1-2') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '2-3') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '3-5') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '5-10') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '10-20') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '20-30') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '30-50') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '50-100') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }else if ($Wbc_ua == '100-200With clumping') 
                    {$result->Wbc_ua1 ='wbcua02'; 
                 }
                 else if ($Wbc_ua == '-' ) {
                    $result->Wbc_ua1 ='wbcua03'; 
                 }else if ($Wbc_ua == '' ) {
                    $result->Wbc_ua1 ='wbcua00'; 
                 }
                 
        $result->save();
    }
    
    public function actionConsult($id){
        
        $model = \frontend\modules\bkhealth\models\Inresult::find()->where(['Vn'=>$id])->one(); 
        $content = $this->renderPartial('_consult',[
            'model' => $model,
        ]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
//            'marginLeft'=>100,
//            'marginRight'=>false,
//            'marginTop'=>false,
//            'marginBottom'=>false,
//            'marginHeader'=>false,
//            'marginFooter'=>false,
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'คำแนะนำ'],
            // call mPDF methods on the fly
            'methods' => [
            //'SetHeader' => ['Krajee Report Header'],
            // 'SetFooter' => ['{PAGENO}'],
               
            ]
        ]);
        return $pdf->render();
    }
    
    public function actionReport($id){
        
        $model = \frontend\modules\bkhealth\models\Inresult::find()->where(['Vn'=>$id])->one(); 
        $content = $this->renderPartial('_report',[
            'model' => $model,
        ]);
        
        

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,

            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            //'cssInline' => 'body{font-size:18px}',
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' =>'ผลการตรวจสุขภาพ'],
            // call mPDF methods on the fly
            'methods' => [
            //'SetHeader' => ['Krajee Report Header'],
            // 'SetFooter' => ['{PAGENO}'],
               
            ]
        ]);
        return $pdf->render();       
    }
}
