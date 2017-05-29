<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\bkhealth\models\Grouplab */

$this->title = 'Create Grouplab';
$this->params['breadcrumbs'][] = ['label' => 'Grouplabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grouplab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
