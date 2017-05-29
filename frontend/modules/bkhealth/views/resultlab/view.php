<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Resultlab */

$this->title = $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Resultlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultlab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <div>                
        <?= Html::img('icpics/'.$model->picconsult,['class'=>'thumbnail img-responsive'])?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'attributes' => [
           // 'id',
            'code',
            'value',
            'default',
            'result',
            'consult:ntext',
            'picconsult',
        ],
    ]) ?>

</div>
