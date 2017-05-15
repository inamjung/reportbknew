<?php

namespace frontend\modules\bkhealth\controllers;

use Yii;
use frontend\modules\bkhealth\models\Bkopdscreen;
use frontend\modules\bkhealth\models\BkopdscreenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\data\ArrayDataProvider;

/**
 * BkopdscreenController implements the CRUD actions for Bkopdscreen model.
 */
class BkopdscreenController extends Controller
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
     * Lists all Bkopdscreen models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BkopdscreenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bkopdscreen model.
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
     * Creates a new Bkopdscreen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bkopdscreen();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Vn]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Bkopdscreen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Vn]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Bkopdscreen model.
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
     * Finds the Bkopdscreen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Bkopdscreen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bkopdscreen::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionInsertopd(){
        $inputFile = 'uploads/hosopdvisit.xls';
        try{
            $inputFileType = \PHPExcel_IOFactory::identify($inputFile);
            $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFile);
        }  catch(Exception $e)
        {
            die('Error');
        }
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        
        for( $row = 1; $row <= $highestRow; $row++)
        {
            $rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);
            
            if($row == 1)
            {
                continue;
            }
            $visitopds = new Bkopdscreen();
            
            $visitopds->Vstdate = $rowData[0][0];
            $visitopds->Vn = $rowData[0][1];
            $visitopds->Hn = $rowData[0][2];           
            $visitopds->Pt = $rowData[0][3];
            $visitopds->Sex = $rowData[0][4];
            $visitopds->Age_y = $rowData[0][5];
            $visitopds->Clinic = $rowData[0][6];
            $visitopds->Drugallergy = $rowData[0][7];
            $visitopds->Pdx = $rowData[0][8];
            $visitopds->Bpd = $rowData[0][9];
            $visitopds->Bps = $rowData[0][10];
            $visitopds->Bw = $rowData[0][11];
            $visitopds->Cc = $rowData[0][12];            
            $visitopds->Drinking_type_id = $rowData[0][13];
            $visitopds->Smoking_type_id = $rowData[0][14];
            $visitopds->Hr = $rowData[0][15];           
            $visitopds->Pe = $rowData[0][16];
            $visitopds->Pulse = $rowData[0][17];
            $visitopds->Temperature = $rowData[0][18];
            $visitopds->Height = $rowData[0][19];
            $visitopds->Rr = $rowData[0][20];
            $visitopds->Fbs = $rowData[0][21];
            $visitopds->Bmi = $rowData[0][22];
            $visitopds->Tg = $rowData[0][23];
            $visitopds->Hdl = $rowData[0][24];
            $visitopds->Glucurine = $rowData[0][25];            
            $visitopds->Bun = $rowData[0][26];
            $visitopds->Creatinine = $rowData[0][27];
            $visitopds->Ua = $rowData[0][28];           
            $visitopds->Hba1c = $rowData[0][29];
            $visitopds->Tc = $rowData[0][30];
            $visitopds->Ldl = $rowData[0][31];
            $visitopds->Ast = $rowData[0][32];
            $visitopds->Alt = $rowData[0][33];
            $visitopds->Cholesterol = $rowData[0][34];
            $visitopds->Waist = $rowData[0][35];
            $visitopds->Pttype = $rowData[0][36];
            $visitopds->Gfr_ckd = $rowData[0][37];
            $visitopds->Wbc = $rowData[0][38];            
            $visitopds->Rbc = $rowData[0][39];
            $visitopds->Alk = $rowData[0][40];
            $visitopds->Eo = $rowData[0][41];           
            $visitopds->Hct = $rowData[0][42];
            $visitopds->Dx_doctor = $rowData[0][43];
            $visitopds->Dname = $rowData[0][44];
            
            $visitopds->save();
            
           //print_r($visitopds->getErrors());
        }
            // die('okay');
        
        return $this->redirect(['/bkhealth/bkopdscreen/index']);  
             
    }
}
