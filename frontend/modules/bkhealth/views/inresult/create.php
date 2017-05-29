<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Inresult */

$this->title = 'Create Inresult';
$this->params['breadcrumbs'][] = ['label' => 'Inresults', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inresult-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
