<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shipment */

$this->title = 'Update Shipment: ' . $model->bookID;
$this->params['breadcrumbs'][] = ['label' => 'Shipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookID, 'url' => ['view', 'bookID' => $model->bookID, 'indentID' => $model->indentID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
