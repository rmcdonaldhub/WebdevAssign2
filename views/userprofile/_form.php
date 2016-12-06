<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-form">

   <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    
    <?php
    $a= ['Male' => 'Male', 'Female' => 'Female'];
    echo $form->field($model, 'gender',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
    

    <?= $form->field($model, 'dob')->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd', 'options' => ['class' => 'form-control'],
]) ?>
    
    <?php
    $a= ['1' => '1', '2' => '2', '3' => '3', '4' => '4',
        '5' => '5', '6' => '6', '7' => '7', '8' => '8',
        '9' => '9', '10' => '10'];
    echo $form->field($model, 'years_of_experience',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>
    

    <?php
    $a= ['Telecommunication' => 'Telecommunication', 'Agriculture' => 'Agriculture', 'Information Technology' => 'Information Technology'];
    echo $form->field($model, 'industry',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?php
    $a= ['St. Thomas' => 'St. Thomas', 'Kingston' => 'Kingston', 'St. Andrew' => 'St. Andrew', 'St. Catherine' => 'St. Catherine',
        'Clarendon' => 'Clarendon', 'Manchester' => 'Manchester', 'St. Elizabeth' => 'St. Elizabeth', 'Westmoreland' => 'Westmoreland',
        'Hanover' => 'Hanover', 'St. James' => 'St.James', 'Trelawny' => 'Trelawny', 'St. Ann' => 'St.Ann', 'St. Mary' => 'St.Mary',
        'Portland' => 'Portland'];
    echo $form->field($model, 'location',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?= $form->field($model, 'about_me')->textInput(['maxlength' => true]) ?>

   

<?= $form->field($model, 'file')->fileInput() ?>
<?php 
if ($model->profile_picture){
    echo '<div class="im" style="padding-left:12em;">';
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->profile_picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo Html::a('Delete Profile Picture', ['erase', 'id'=>$model->id], ['class'=>'btn btn-danger']).'</br>';
    echo '</div>';
}
?>

     <?php
    $a= ['Engineer' => 'Engineer', 'Mis Manager' => 'Mis Manager'];
    echo $form->field($model, 'professional_title',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?php
    $a= ['10' => '10', '20' => '20', '30' => '30', '40' => '40',
        '50' => '50', '60' => '60', '70' => '70', '80' => '80',
        '90' => '90', '100' => '100'];
    echo $form->field($model, 'career_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

   
    
     <?php
    $a= ['10' => '10', '20' => '20', '30' => '30', '40' => '40',
        '50' => '50', '60' => '60', '70' => '70', '80' => '80',
        '90' => '90', '100' => '100'];
    echo $form->field($model, 'communication_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>


    
    
    <?php
    $a= ['10' => '10', '20' => '20', '30' => '30', '40' => '40',
        '50' => '50', '60' => '60', '70' => '70', '80' => '80',
        '90' => '90', '100' => '100'];
    echo $form->field($model, 'organizational_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

   
    
    <?php
    $a= ['10' => '10', '20' => '20', '30' => '30', '40' => '40',
        '50' => '50', '60' => '60', '70' => '70', '80' => '80',
        '90' => '90', '100' => '100'];
    echo $form->field($model, 'job_related_level',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput() ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
