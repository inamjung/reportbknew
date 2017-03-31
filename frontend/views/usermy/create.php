<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Usermy */

$this->title = 'Create Usermy';
$this->params['breadcrumbs'][] = ['label' => 'Usermies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
