<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Bkopdscreen */

$this->title = 'Create Bkopdscreen';
$this->params['breadcrumbs'][] = ['label' => 'Bkopdscreens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bkopdscreen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
