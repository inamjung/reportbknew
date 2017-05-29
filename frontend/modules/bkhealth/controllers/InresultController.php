<?php

namespace frontend\modules\bkhealth\controllers;

use Yii;
use frontend\modules\bkhealth\models\Inresult;
use frontend\modules\bkhealth\models\InresultSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;

/**
 * InresultController implements the CRUD actions for Inresult model.
 */
class InresultController extends Controller
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
     * Lists all Inresult models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InresultSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inresult model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionViewic($id)
    {
        return $this->render('viewic', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Inresult model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Inresult();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Vn]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Inresult model.
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
     * Deletes an existing Inresult model.
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
     * Finds the Inresult model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Inresult the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Inresult::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionSearchic($Cid=null,$Vn=null){
        
        $sql="select * from inresult re where re.Cid='$Cid' order by re.Vstdate desc";
        
        try{
            $rawData = Yii::$app->db->createCommand($sql)->queryAll();
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
        
        return $this->render('searchic',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
            'Cid'=>$Cid,
            'Vn'=>$Vn
            
        ]);
    }
}
