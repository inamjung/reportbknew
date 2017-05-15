<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\FileUploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'File Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-upload-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create File Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'debit_file',
            'detail_file:ntext',
            'upload_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
