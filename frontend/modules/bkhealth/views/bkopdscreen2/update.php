<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Bkopdscreen */

$this->title = 'Update Bkopdscreen: ' . $model->Vn;
$this->params['breadcrumbs'][] = ['label' => 'Bkopdscreens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Vn, 'url' => ['view', 'id' => $model->Vn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bkopdscreen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
