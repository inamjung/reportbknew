<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\inven\models\Invendetails */

$this->title = 'Create Invendetails';
$this->params['breadcrumbs'][] = ['label' => 'Invendetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invendetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
