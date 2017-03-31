<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\inven\models\Invenmains */

$this->title = 'Create Invenmains';
$this->params['breadcrumbs'][] = ['label' => 'Invenmains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invenmains-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelDetails' => $modelDetails
    ]) ?>

</div>
