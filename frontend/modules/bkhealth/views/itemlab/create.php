<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Itemlab */

$this->title = 'Create Itemlab';
$this->params['breadcrumbs'][] = ['label' => 'Itemlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemlab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
