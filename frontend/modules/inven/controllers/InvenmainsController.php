<?php

namespace frontend\modules\inven\controllers;

use Yii;
use frontend\modules\inven\models\Invenmains;
use frontend\modules\inven\models\InvenmainsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\base\Model;
use kartik\mpdf\Pdf;

/**
 * InvenmainsController implements the CRUD actions for Invenmains model.
 */
class InvenmainsController extends Controller
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
     * Lists all Invenmains models.
     * @return mixed
     */
//    public function actionIndex()
//    {
//        $searchModel = new InvenmainsSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Invenmains::find()->orderBy('create_at desc'),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Invenmains model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Invenmains model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new Invenmains();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }
//
//    /**
//     * Updates an existing Invenmains model.
//     * If update is successful, the browser will be redirected to the 'view' page.
//     * @param integer $id
//     * @return mixed
//     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('update', [
//                'model' => $model,
//            ]);
//        }
//    }
    
    public function actionCreate() {
        $model = new Invenmains();
        $modelDetails = [];

        $formDetails = Yii::$app->request->post('Invendetails', []);
        foreach ($formDetails as $i => $formDetail) {
            $modelDetail = new \frontend\modules\inven\models\Invendetails(['scenario' => \frontend\modules\inven\models\Invendetails::SCENARIO_BATCH_UPDATE]);
            $modelDetail->setAttributes($formDetail);
            $modelDetails[] = $modelDetail;
        }

        //handling if the addRow button has been pressed
        if (Yii::$app->request->post('addRow') == 'true') {
            $model->load(Yii::$app->request->post());
            $modelDetails[] = new \frontend\modules\inven\models\Invendetails(['scenario' => \frontend\modules\inven\models\Invendetails::SCENARIO_BATCH_UPDATE]);
            return $this->render('create', [
                        'model' => $model,
                        'modelDetails' => $modelDetails
            ]);
        }

        if ($model->load(Yii::$app->request->post())) {            
            if (Model::validateMultiple($modelDetails) && $model->validate()) {
               $model->user_id = Yii::$app->user->identity->id;
               $model->create_at = date('Y-m-d');
//               $model->status = 'no';
                $model->save();
                foreach ($modelDetails as $modelDetail) {
                    $modelDetail->main_id = $model->id;
                    $modelDetail->save();
                }
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
                    'model' => $model,
                    'modelDetails' => $modelDetails
        ]);
    }

    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $modelDetails = $model->maindetail;
        
        //$receive = new Subrecievedetail();

        $formDetails = Yii::$app->request->post('Invendetails', []);
        foreach ($formDetails as $i => $formDetail) {
            //loading the models if they are not new
            if (isset($formDetail['id']) && isset($formDetail['updateType']) && $formDetail['updateType'] != \frontend\modules\inven\models\Invendetails::UPDATE_TYPE_CREATE) {
                //making sure that it is actually a child of the main model
                $modelDetail = \frontend\modules\inven\models\Invendetails::findOne(['id' => $formDetail['id'], 'main_id' => $model->id]);
                $modelDetail->setScenario(\frontend\modules\inven\models\Invendetails::SCENARIO_BATCH_UPDATE);
                $modelDetail->setAttributes($formDetail);
                $modelDetails[$i] = $modelDetail;
                //validate here if the modelDetail loaded is valid, and if it can be updated or deleted
            } else {
                $modelDetail = new \frontend\modules\inven\models\Invendetails(['scenario' => \frontend\modules\inven\models\Invendetails::SCENARIO_BATCH_UPDATE]);
                $modelDetail->setAttributes($formDetail);
                $modelDetails[] = $modelDetail;
            }
        }

        //handling if the addRow button has been pressed
        if (Yii::$app->request->post('addRow') == 'true') {
            $modelDetails[] = new \frontend\modules\inven\models\Invendetails(['scenario' => \frontend\modules\inven\models\Invendetails::SCENARIO_BATCH_UPDATE]);
            return $this->render('update', [
                        'model' => $model,
                        'modelDetails' => $modelDetails
            ]);
        }
       

        if ($model->load(Yii::$app->request->post())) {
            if (Model::validateMultiple($modelDetails) && $model->validate()) {
                
                
                $model->save();
                foreach ($modelDetails as $modelDetail) {
                    //details that has been flagged for deletion will be deleted
                    if ($modelDetail->updateType == \frontend\modules\inven\models\Invendetails::UPDATE_TYPE_DELETE) {
                        $modelDetail->delete();
                    } else {
                        //new or updated records go here
                        
                        
                        $modelDetail->main_id = $model->id;
                        $modelDetail->save();
                        
                    }
                }
                return $this->redirect(['index']);
            }
        }


        return $this->render('update', [
                    'model' => $model,
                    'modelDetails' => $modelDetails
        ]);
    }
    /**
     * Deletes an existing Invenmains model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Invenmains model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Invenmains the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Invenmains::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionReport($id) {
   $model = \frontend\modules\inven\models\Invendetails::find()->where(['main_id'=>$id])->one();
    $content = $this->renderPartial('_reportView');
    
    // setup kartik\mpdf\Pdf component
    $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE, 
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
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
        'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Krajee Report Header'], 
            'SetFooter'=>['{PAGENO}'],
        ]
    ]);
    
    // return the pdf output as per the destination setting
    return $pdf->render(); 
}
}
