<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\models\User;

/** @var yii\web\View $this */
/** @var app\models\Article $model */
/** @var yii\widgets\ActiveForm $form */

// Получаем список категорий
$categories = Category::find()->all();
$categoryItems = ArrayHelper::map($categories, 'id', 'name');

// Получаем список пользователей
$users = User::find()->all();
$userItems = ArrayHelper::map($users, 'id', 'userfname');
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'user_id')->dropDownList($userItems, ['prompt' => 'Выберите пользователя']) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryItems, ['prompt' => 'Выберите категорию']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>