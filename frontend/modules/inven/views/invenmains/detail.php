<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\inven\models\InvendetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invendetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invendetails-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Invendetails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'main_id',
            
            'detailproduct.name',
            'qty',
            'remark',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
