<?php
use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
//evita que el usuario abra el login si esta logueado
if(!Yii::$app->user->isGuest){
      Yii::$app->response->redirect(array('/site/dashboard'))->send();
      Yii::$app->end();
}
?>


<div class="well well-sm" align="center">
    <P>SISTEMA DE APERTURA, LIQUIDACIÓN Y CANCELACIÓN DE PROGRAMAS EDUCATIVOS</P>
    
    <h3>INGRESO AL SISTEMA</h3>
   
</div>
<P style="font-size: 1em;text-align: center;color:#006600;text-transform: uppercase;">CONVOCATORIA <?=$nombreConvocatoria; ?></P>
<br>
<div id="login-wrapper">
	<center>
		<?php $form = ActiveForm::begin([
			'id'      => 'login-form',
			'options'=>['autocomplete'=>'off', 'class' => 'well login-form'],
			'validateOnBlur'=>false,
			'fieldConfig' => [
				'template'=>"{input}\n{error}",
			],
		]) ?>

		<?= $form->field($model, 'username')
			->textInput(['placeholder'=>$model->getAttributeLabel('username'), 'autocomplete'=>'off']) ?>

		<?= $form->field($model, 'password')
			->passwordInput(['placeholder'=>$model->getAttributeLabel('password'), 'autocomplete'=>'off']) ?>

		<?= Html::submitButton(
			UserManagementModule::t('front', 'Acceder'),
			['class' => 'btn btn-sm btn-success btn-block']
		) ?>

		<?php ActiveForm::end() ?>
                <?php //echo Yii::$app->getRequest()->getUserIP()?>
	</center>
</div>
