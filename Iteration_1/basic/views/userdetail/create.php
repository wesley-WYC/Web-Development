<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Userdetail */

$this->title = 'Create Userdetail For New User';
$this->params['breadcrumbs'][] = ['label' => 'Userdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
