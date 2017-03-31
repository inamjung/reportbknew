<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use frontend\modules\inven\models\InvendetailsSearch;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\inven\models\InvenmainsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invenmains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invenmains-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Invenmains', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value'=> function($model, $key, $index, $column){
                    return GridView::ROW_COLLAPSED;                    
                },
                'detail'=> function($model, $key, $index, $column){
                    $searchModel = new frontend\modules\inven\models\InvendetailsSearch();
                    $searchModel ->main_id = $model->id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                    
                    return Yii::$app->controller->renderPartial('detail',[
                        'searchModel'=> $searchModel,
                        'dataProvider'=> $dataProvider,
                    ]);
                 }
                ],

            //'id',
            'date',
            
            [
               'attribute'=>'department_id' ,
                'value'=>'maindep.name',
            ],            
            'user_id',
            //'create_at',
            // 'update_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
