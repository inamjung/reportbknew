<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\ItemlabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itemlabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemlab-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itemlab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'dafault',
            'grouplab_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
