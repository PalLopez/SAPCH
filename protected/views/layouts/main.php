<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="en">

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>

		<div class="container" id="page">

			<div id="mainmenu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/')),
						array('label'=>'Visitas', 'url'=>array('/visitas'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Control de Niños', 'url'=>array('/control_ninos'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Personal Externo', 'url'=>array('/personal_externo'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Personal Interno/Usuarios', 'url'=>array('/usuarios'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Entradas/Salidas', 'url'=>array('/entradas_salidas'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Otras opciones', 'url'=>array('/configuracion'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Registrar Entrada', 'url'=>array('/registrar_entradas/create'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Registrar Salida', 'url'=>array('/registrar_salidas'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div><!-- mainmenu -->

			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>

			<div class="clear"></div>

			<div id="footer">
				Copyright &copy; <?php echo date('Y'); ?> Fundación Palace.<br/>
				All Rights Reserved.<br/>
				Desarrollado por Palmira Maritza López González<br/>
				<?php echo Yii::powered(); ?>
			</div><!-- footer -->

		</div><!-- page -->

	</body>
</html>
