<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;






/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($article, 'category_id')->dropDownList(
        ArrayHelper::map($categories, 'id', 'title'), 
        ['prompt' => 'Select Category']
    ) ?>

    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end(); ?>

</div>