<?php
 use yii\helpers\Html ;
 use yii\widgets\ActiveForm;


?>

<?php

$form=ActiveForm::beguin(); ?>
<?= $form->field($model,'name')  ?>
<?= $form->field($model,'email')  ?>
<div>
	<?= Html::submitButton('submit',['class'=>'btn btn-primary'])   ?>
</div>
<?php
  ActiveForm::end( ) ;
?>